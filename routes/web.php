<?php

Route::get('/', function () {
    return view('welcome');
});

//Ruta para el CRUD de productos
Route::resource('productos','Backoffice\ProductoController');