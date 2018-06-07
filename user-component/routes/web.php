<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Http\Controllers\UsersController;
use App\Http\Controllers\RoleUserController;
use App\Http\Controllers\RoleController;

/**--------------------------------------------------------------------
|*CRUD USERS
|*
|*
*/
$router->post('/users/login', 'UsersController@getToken');
//devuelve users por id
$router->get('/users/{id}', 'UsersController@show');
//crea users
$router->post('/users', 'UsersController@create');


$router->get('/roles/{id}', 'RoleController@show');
//crea rol
$router->post('/roles', 'RoleController@create');
//devuelve todas las rol
$router->get('/roles', 'RoleController@index');
//Actualizr rol
$router->put('/roles/{id}', 'RoleController@update');
//Borra rol
$router->delete('/roles/{id}', 'RoleController@delete');



$router->group(['middleware' => 'auth'], function () use ($router) {
	
	//devuelve todas las users
	$router->get('/users', 'UsersController@index');
	//Actualizr users
	$router->put('/users/{id}', 'UsersController@update');
	//Borra users
	$router->delete('/users/{id}', 'UsersController@delete');



});