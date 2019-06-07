<?php

Route::get('/', 'Frontoffice\PaginasController@inicio')->name('inicio');
Route::get('/detalles/{id}', 'Frontoffice\PaginasController@detalles')->name('detalles');

//Ruta para el CRUD de productos
Route::resource('productos','Backoffice\ProductoController');
Route::get('producto-inactivar/{id}','Backoffice\ProductoController@inactivar')->name('producto-inactivar');

Route::get('/imagenes/{producto_id}','Backoffice\ProductoimagenController@index')->name('img');
Route::post('/imagenes/subir','Backoffice\ProductoimagenController@store')->name('img-save');
Route::delete('/imagenes/eliminar/{id}','Backoffice\ProductoimagenController@destroy')->name('img-delete');

//Rutas para el Carrito de Compras
Route::get('/carrito','Frontoffice\CarritoController@mostrar')->name('carrito-mostrar');
Route::get('/carrito/agregar/{id}','Frontoffice\CarritoController@agregar')->name('carrito-agregar');
Route::get('/carrito/vaciar','Frontoffice\CarritoController@vaciar')->name('carrito-vaciar');
Route::get('/carrito/borrar/{id}','Frontoffice\CarritoController@borrar')->name('carrito-borrar');
Route::get('/carrito/actualizar/','Frontoffice\CarritoController@actualizar')->name('carrito-actualizar');