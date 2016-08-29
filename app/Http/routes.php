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

Route::get('/','HomeController@welcome');

/*Route::auth();*//*ruta creada por el comando make:auth */
/*Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);*//*desactivado para convinacion de teclas*/

/*si se quiere se quita todas estas rutas y se descomenta route::auth ()*/
Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);
// Registration Routes...

// Password Reset Routes...
/*-------*/

Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index');

	// Registration Routes...
	Route::get('/register', 'Auth\AuthController@showRegistrationForm');//rutas puestas despues de modificar authcontroller constructor guest 
	Route::post('/register', 'Auth\AuthController@register');//rutas puestas despues de modificar authcontroller constructor guest 

	// Password Reset Routes...
	Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
	Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
	Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);
	// Create Publications
	Route::get('form-publicacion','publicacioncontroller@getpublicacion');
	Route::post('postimgs', ['as' => 'postimgs', 'uses' => 'publicacioncontroller@postimgs']);
	//control de publicaciones
	Route::get('control-pagina/{id}',['as'=>'control_pagina','uses'=>'publicacioncontroller@controlpaginas']);
    Route::get('pb-estado/{id}/{id_pagina}','publicacioncontroller@estadopublicacion');
    Route::get('pb-editar/{id}','publicacioncontroller@editarpub');
    Route::post('editpub', ['as' => 'postimgs', 'uses' => 'publicacioncontroller@editpub']);

});


//paginas Web enlazadas a la gobernacion /...... etc
	Route::get('/sitio/{id}', 'sitiocontroller@pubxsitio');
    Route::get('/articulo/{id}', 'sitiocontroller@leerMas');

route::get('ss/{id}','sitiocontroller@getimgs');
route::get('sss/{id}','sitiocontroller@getimgs2');