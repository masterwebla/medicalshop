<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\ProductoCreado;
use App\Producto;
use App\Unidad;
use App\Estadoproducto;
use App;
use View;

class ProductoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }

    //Función para listar
    public function index(Request $request)
    {
        $productos = Producto::nombre($request->nombre)
                        ->precio($request->precio)
                        ->where('estado_id','!=',3)->orderBy('nombre')
                        ->orderBy('precio')->get();
        return view('backoffice.productos.index',compact('productos'));
    }

    //Función para formulario de editar
    public function create()
    {
        $unidades = Unidad::all();
        $estados = Estadoproducto::all();
        return view('backoffice.productos.crear',compact('unidades','estados'));
    }

    //Función para insertar o guardar
    public function store(Request $request)
    {
        //Validación de campos
        $request->validate([
            'nombre' => 'required|unique:productos|max:100',
            'descripcion' => 'required',
            'costo' => 'required|numeric',
            'precio' => 'required|numeric|min:0',
            'cantidad' => 'required|numeric'
        ]);

        //Insertar datos
        $producto = Producto::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'descripcion_larga'=>$request->descripcion_larga,
            'costo'=>$request->costo,
            'precio'=>$request->precio,
            'cantidad'=>$request->cantidad,
            'unidad_id'=>$request->unidad_id,
            'estado_id'=>$request->estado_id,
        ]);

        //Enviar mail automático notificando un nuevo producto
        $email = Auth::user()->email;
        $nombre = $producto->nombre;
        $descripcion = $producto->descripcion;
        $precio = $producto->precio;
        Mail::to($email)->send(new ProductoCreado($nombre,$descripcion,$precio));

        return redirect()->route('productos.index');
    }

    public function show($id)
    {
        //
    }

    //Mostrar formulario para editar
    public function edit($id)
    {
        $producto = Producto::find($id);
        $unidades = Unidad::all();
        $estados = Estadoproducto::all();
        return view('backoffice.productos.editar',compact('producto','unidades','estados'));
    }

    //Función para actualizar
    public function update(Request $request, $id)
    {
        //Validación de campos
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required',
            'costo' => 'required|numeric',
            'precio' => 'required|numeric|min:0|min:0',
            'cantidad' => 'required|numeric'
        ]);

        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->descripcion_larga = $request->descripcion_larga;
        $producto->costo = $request->costo;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->unidad_id = $request->unidad_id;
        $producto->estado_id = $request->estado_id;
        $producto->save();

        return redirect()->route('productos.index');
    }

    public function inactivar($id)
    {
        $producto = Producto::find($id);
        $producto->estado_id = 3;
        $producto->save();

        return redirect()->back();
    }

    //Función para exportar en PDF
    public function exportarPDF(){
        $productos = Producto::all();
        $pdf = App::make('dompdf.wrapper');
        $view = View::make('backoffice.productos.pdf',compact('productos'))->render();
        $pdf->loadHTML($view);
        return $pdf->download('productos');
    }

    //Función para exportar a Excel
    public function exportarExcel(){
        Excel::create('Productos', function($excel) {
            $excel->sheet('Productos', function($sheet) {
                $productos = Producto::select('nombre','descripcion','costo','precio')->get();
                $sheet->fromArray($productos);
            });
        })->export('xlsx');
    }

    //Función para importar Excel
    public function importarExcel(Request $request){
        //Recibir el archivo
        $archivo = $request->file('archivo');
        
        //Importación
        Excel::load($archivo,function($reader){
            foreach($reader->get() as $producto){
                Producto::create([
                    'nombre'=>$producto->nombre,
                    'descripcion'=>$producto->descripcion,
                    'descripcion_larga'=>$producto->descripcion_larga,
                    'costo'=>$producto->costo,
                    'precio'=>$producto->precio,
                    'cantidad'=>$producto->cantidad,
                    'unidad_id'=>$producto->unidad_id,
                    'estado_id'=>$producto->estado_id
                ]);
            }
        });
        return redirect()->route('productos.index');
    }
}