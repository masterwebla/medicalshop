<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Unidad;
use App\Estadoproducto;

class ProductoController extends Controller
{
    //Función para listar
    public function index()
    {
        $productos = Producto::all();
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
        Producto::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'descripcion_larga'=>$request->descripcion_larga,
            'costo'=>$request->costo,
            'precio'=>$request->precio,
            'cantidad'=>$request->cantidad,
            'unidad_id'=>$request->unidad_id,
            'estado_id'=>$request->estado_id,
        ]);
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
            'precio' => 'required|numeric|min:0|max:6',
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

    public function destroy($id)
    {
        //
    }
}
