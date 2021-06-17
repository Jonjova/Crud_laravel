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

Route::get('a','casa@index')->name('a');
//Route::get('c','casa@editar');
Route::get('/b', 'casa@agregar');
Route::post('guardar', 'casa@store')->name('guardar');
Route::get('actualizar/{vivienda}', 'casa@update')->name('actualizar');
//Route::get('editar{id}', 'casa@edit');
Route::get('eliminar/{id}', 'casa@destroy');
Route::get('/vistaruta/{id}','casa@edit')->name('editar');

//Route::get(‘alert/{AlertType}’,’sweetalertController@alert’)->name(‘alert’);