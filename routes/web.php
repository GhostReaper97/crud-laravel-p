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

use App\Crud;

Route::get('/','CrudViewController@Principal');
Route::get('/formulario','CrudViewController@FormularioCrud');
Route::get('/formulario/{id?}','CrudViewController@FormularioEditar');

Route::post('/guardar','CrudViewController@Guardar');
Route::post('/eliminar','CrudViewController@Eliminar');
Route::post('/modificar','CrudViewController@Modificar');