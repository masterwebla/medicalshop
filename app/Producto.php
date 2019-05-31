<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $fillable = ['nombre','descripcion','descripcion_larga','costo','precio','cantidad','unidad_id','estado_id'];

    //Relación con el modelo Estadoproducto
    public function estado(){
    	return $this->belongsTo('App\Estadoproducto');
    }

    //Relación con el modelo Unidad
    public function unidad(){
    	return $this->belongsTo('App\Unidad');
    }

}
