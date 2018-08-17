<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculaId');
//solo poner el nombre del metodo, los parametros estan en la ruta

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');