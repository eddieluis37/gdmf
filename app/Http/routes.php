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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'users' => 'UsersController',
    'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Grupo de rutas que requieren autenticación.

$router->group(['middleware' => 'auth'], function() {

    Route::resource('productors', 'ProductorController') ;
    Route::get('productors/{id}/delete',

        [
            'as'    => 'productors.delete',
            'uses'  => 'ProductorController@destroy'
        ]);



});