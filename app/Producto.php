<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $fillable = ['nombre','descripcion','descripcion_larga','costo','precio','cantidad','unidad_id','estado_id'];

}
