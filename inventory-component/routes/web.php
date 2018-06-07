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
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BillProductController;
use App\Http\Controllers\BillController;


$router->group(['middleware' => 'auth'], function () use ($router) {

		//devuelve product por id
		$router->get('/products/{id}', 'ProductController@show');
		//crea product
		$router->post('/products', 'ProductController@create');
		//devuelve todas las product
		$router->get('/products', 'ProductController@index');
		//Actualizr product
		$router->put('/products/{id}', 'ProductController@update');
		//Borra product
		$router->delete('/products/{id}', 'ProductController@delete');
		//Obtiene categoría
		$router->get('/products/{id}/category/', 'ProductController@getCategory');





		/**--------------------------------------------------------------------
		|*CRUD CATEGORIES
		|*
		|*
		*/
		//devuelve category por id
		$router->get('/categories/{id}', 'CategoryController@show');
		//crea category
		$router->post('/categories', 'CategoryController@create');
		//devuelve todas las categorías
		$router->get('/categories', 'CategoryController@index');
		//Actualizr category
		$router->put('/categories/{id}', 'CategoryController@update');
		//Borra category
		$router->delete('/categories/{id}', 'CategoryController@delete');






		/**--------------------------------------------------------------------
		|*CRUD BILL-PRODUCTS
		|*
		|*
		*/
		//devuelve sale (user-product relationship) por id
		$router->get('/sales/{id}', 'BillProductController@show');
		//crea sale (user-product relationship)
		$router->post('/sales', 'BillProductController@create');
		//devuelve todas las sale (user-product relationship)
		$router->get('/sales', 'BillProductController@index2');
		//Actualizr sale (user-product relationship)
		$router->put('/sales/{id}', 'BillProductController@update');
		//Borra sale (user-product relationship)
		$router->delete('/sales/{id}', 'BillProductController@delete');
		//Product of sale
		$router->get('/sales/{id}/product', 'BillProductController@getProduct');
		//Bill of product
		$router->get('/sales/{id}/bill', 'BillProductController@getProduct');

		$router->get('/bill2', 'BillController@lastBill');



		/**--------------------------------------------------------------------
		|*CRUD BILL
		|*
		|*
		*/
		//devuelve sale (user-product relationship) por id
		$router->get('/bill/{id}', 'BillController@show');
		//crea sale (user-product relationship)
		$router->post('/bill', 'BillController@create');
		//devuelve todas las sale (user-product relationship)
		$router->get('/bill', 'BillController@index');
		//Actualizr sale (user-product relationship)
		$router->put('/bill/{id}', 'BillController@update');
		//Borra sale (user-product relationship)
		$router->delete('/bill/{id}', 'BillController@delete');



});
