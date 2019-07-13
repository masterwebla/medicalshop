<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;

class PosController extends Controller
{
    //Función para la caja de POS del Backoffice
    public function caja(){
    	return view('backoffice.pos.caja');
    }

    //Función para buscar Productos con Ajax
    public function buscarProductos(Request $request){
    	$productos = Producto::nombre($request->nombre)->get();
    	//return $productos;
    	//$productos = [{"id":1,"nombre":"Crema"},{"id":2,"nombre":"gel"}];

    	$resultHTML = null;

    	foreach($productos as $producto){
    		$nombrep = "'".$producto->nombre."'";
			$resultHTML .= '
			<div class="col-md-3 card" onclick="addCart('.$producto->id.','.$nombrep.','.$producto->precio.')">
				<img class="card-img-top" src="imagenes/'.$producto->imagen.'" alt="'.$producto->nombre.'">
				<div class="card-body">
				    <h6 class="card-title">'.$producto->nombre.'</h6>
				    <p class="card-text">$'.number_format($producto->precio,0,',','.').'</p>
				</div>
			</div>';
		}

		return $resultHTML;
    }
}
