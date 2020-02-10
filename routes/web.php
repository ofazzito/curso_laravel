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

Route::get('errores', function(){

    abort(404);
});

Route::resource('estudiante','EstudiantesController');

Route::resource('tareas','TareasController');

Route::get('/tareas/buscar','TareasController@buscar')->name('tareas.buscar');

Route::get('dashboard','DashboardController@index')->name('dashboard.index');