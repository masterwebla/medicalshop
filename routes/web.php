<?php

Route::get('/', function () {
    return view('welcome');
});

//Ruta para el CRUD de productos
Route::resource('productos','Backoffice\ProductoController');
Route::get('producto-inactivar/{id}','Backoffice\ProductoController@inactivar')->name('producto-inactivar');

Route::get('/imagenes/{producto_id}','Backoffice\ProductoimagenController@index')->name('img');
Route::post('/imagenes/subir','Backoffice\ProductoimagenController@store')->name('img-save');
Route::delete('/imagenes/eliminar/{id}','Backoffice\ProductoimagenController@destroy')->name('img-delete');