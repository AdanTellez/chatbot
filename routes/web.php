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

Route::get('/', ['as' => 'home','uses' => 'PagesController@home' ]);


Route::get('inicio', ['as' => 'inicio', 'uses' => 'PagesController@inicio']);

Route::post('inicio', 'PagesController@validar');

Route::resource('usuarios','usersController');

Route::resource('mensajes','messagesController');

Route::get('login','Auth\LoginController@showLoginForm');

Route::post('login','Auth\LoginController@login');


/*

Route::get('a', function () {
    return "alco";
});

variable nombre obligatoria
Route::get('saludos/{nombre}', function($nombre){
	return "saludos $nombre";
});

lal variable no es obligatoria y se le asigna un valor por defecto
Route::get('saludos/{nombre?}', function($nombre = "algo"){
	return "saludos $nombre";
});

restringir para que solo puedan ser letras
Route::get('saludos/{nombre?}', function($nombre = "algo"){
	return "saludos $nombre";
})->where('nombre',"[A-Za-z]+"); 

Route::get('saludos')

retornar variables a alrchivos
Route::get('saludos/{nombre?}', function($nombre = "algo"){
	return view('principal', compact('nombre'));
});*/