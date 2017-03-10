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




Route::get('Equipos', function () {
    return view('Equipos');
});

Route::get('Eliminar', function () {
    return view('Eliminar');
});

Route::get('Consultar', function () {
    return view('Consultar');
});

Route::post('equipos', 'sacecController@Ambientes'
);
Route::get('Ambientes', 'ambienteController@Index'
);