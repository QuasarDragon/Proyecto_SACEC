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

Route::get('/', function () {
    return view('welcome');
});



//guardar datos
Route::post('Equipos', 'EquipoController@Guardar');


//vista de ambienete
Route::get('Ambientes', 'ambienteController@Index');

//vista de equipo
Route::get('Equipos/{id}', 'EquipoController@cargaequipos');

//listar equipos para eliminar
Route::get('Listar_equipos/{id}', 'EquipoController@Index');


Route::get('Eliminarequipo/{id}', 'EquipoController@eliminarequipo');



// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('home', function () {
    return view('home');
});