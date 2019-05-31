<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Productoimagen;
use File;

class ProductoimagenController extends Controller
{
    //Función para listar las imágenes de un producto
    public function index($producto_id){
    	$producto = Producto::find($producto_id);
    	$imagenes = Productoimagen::where('producto_id',$producto_id)->get();
    	return view('backoffice.productosimagenes.index',compact('producto','imagenes'));
    }

    //Función para guardar y subir la imagen
    public function store(Request $request){
    	//Validar la información
    	$request->validate([
    		'producto_id'=>'required',
    		'archivo' => 'mimes:jpeg,bmp,png'
    	]);

    	//Subir la imagen a una carpeta public/imagenes
        $archivo = $request->file('archivo');
        $ruta = public_path().'/imagenes';
        $nombreimg = $request->producto_id."-".uniqid()."-".$archivo->getClientOriginalName();
        $archivo->move($ruta,$nombreimg);

    	//Insertar en la Base de Datos
    	Productoimagen::create([
    		'archivo'=> $nombreimg,
    		'producto_id'=>$request->producto_id
    	]);

    	return redirect()->back();
    }

    //Función para eliminar
    public function destroy($id){
    	$imagen = Productoimagen::find($id);
    	$ruta = public_path().'/imagenes/'.$imagen->archivo;
        File::delete($ruta);
    	$imagen->delete();

    	return redirect()->back();
    }
}
