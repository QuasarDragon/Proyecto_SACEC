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





Route::get('Ambientes', function () {
    return view('Ambientes');
});

Route::get('Equipos', function () {
    return view('Equipos');
});



Route::get('Consultar', function () {
    return view('Consultar');
});

Route::post('Equipos', 'sacecController@Ambientes');


Route::get('Ambientes', 'ambienteController@Index');



