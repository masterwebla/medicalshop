<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productoimagen extends Model
{
    protected $table = "productos_imagenes";
    protected $fillable = ['archivo','producto_id','principal'];
}
