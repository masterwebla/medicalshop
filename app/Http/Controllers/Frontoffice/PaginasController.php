<?php

namespace App\Http\Controllers\Frontoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Producto;
use App\Productoimagen;

class PaginasController extends Controller
{
    public function inicio(){
    	//$productos = Producto::all();
    	
    	
    	$productos = Producto::leftJoin("productos_imagenes","productos.id","=","productos_imagenes.producto_id")
    		->select('productos.id','productos.nombre','productos.precio','productos.descripcion','productos_imagenes.archivo','productos_imagenes.principal')
    		->get();

    	return view('frontoffice.inicio',compact('productos'));
    }

    //Función para ver los detalles de un producto
    public function detalles($id){
    	$producto = Producto::find($id);
    	$imagenes = Productoimagen::where('producto_id',$id)->get();
    	return view('frontoffice.detalles',compact('producto','imagenes'));
    }
}
