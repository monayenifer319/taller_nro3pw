<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('usuarios', 'UsuarioController');
Route::resource('productos', 'productosController');
Route::resource('compras', 'compraController');
Route::resource('facturas', 'facturaController');
Route::get('usuario/eliminar/{id}', 'usuarioController@destroy');
Route::auth();
Route::get('/home', 'HomeController@index');


