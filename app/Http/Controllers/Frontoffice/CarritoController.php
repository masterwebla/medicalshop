<?php

namespace App\Http\Controllers\Frontoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;
use Session;

class CarritoController extends Controller
{
    //Función constructor para inicializar el carrito
    public function __construct(){
    	if(!Session::has('carrito'))
    		Session::put('carrito',array());
    }
     
    public function mostrar(){
    	$carrito = Session::get('carrito');
    	return view('frontoffice.carrito',compact('carrito'));
    }

    public function agregar($id){
    	$producto = Producto::select('id','nombre','precio')->find($id);
    	$producto->cantcompra = 1;
    	$carrito = Session::get('carrito');
    	$carrito[$producto->id] = $producto;
    	Session::put('carrito',$carrito);
    	return view('frontoffice.carrito',compact('carrito'));
    }

    public function vaciar(){
    	Session::forget('carrito');
    	return redirect()->route('inicio');

    }

    public function borrar($id){
    	$carrito = Session::get('carrito');
    	unset($carrito[$id]);
    	Session::put('carrito',$carrito);
    	return redirect()->route('carrito-mostrar');
    }

    public function actualizar(Request $request){
    	$carrito = Session::get('carrito');
        $producto = Producto::find($request->id);
        $carrito[$producto->id]->cantcompra = $request->cant;
        Session::put('carrito',$carrito);
        return redirect()->route('carrito-mostrar');
    }

}