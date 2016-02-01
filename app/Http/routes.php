<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {

	Route::auth();

    //Route::get('/home', 'HomeController@index');

    Route::get('/', ['as'=>'index', 'middleware'=>'auth', 'uses' => 'BookController@getIndex']);
	Route::get('/auth/register', 'Auth\AuthController@getRegister');
	Route::post('/auth/register', 'Auth\AuthController@postRegister');

	Route::get('/auth/login', 'Auth\AuthController@getLogin');
	Route::post('/auth/login', 'Auth\AuthController@postLogin');
	Route::get('/login', 'Auth\AuthController@getLogin');
	Route::post('/login', 'Auth\AuthController@postLogin');
	Route::get('/user/login', 'Auth\AuthController@getLogin');
	Route::post('/user/login', 'Auth\AuthController@postLogin');

	Route::get('/auth/logout', 'HomeController@getLogout');
	Route::get('/logout', 'HomeController@getLogout');
	Route::get('/user/logout', 'HomeController@getLogout');

	Route::get('/cart', array('before'=>'auth.basic','as'=>'cart','uses'=>'CartController@getIndex'));
	Route::post('/cart/add', ['middleware'=>'auth','uses'=>'CartController@postAddToCart']);
	Route::get('/cart/delete/{id}', array('before'=>'auth.basic','as'=>'delete_book_from_cart','uses'=>'CartController@getDelete'));
	Route::post('/order', array('before'=>'auth.basic','uses'=>'OrderController@postOrder'));
	Route::get('/user/orders', array('before'=>'auth.basic','uses'=>'OrderController@getIndex'));

	Route::get('/book/detail/{id}','BookController@detail');

	Route::get('/backend/dashboard', ['as'=>'Backendindex', 'middleware'=>'auth', 'uses' => 'BookController@dashboard']);

	Route::get('/backend/book', ['as'=>'bookBackendindex', 'middleware'=>'auth', 'uses' => 'BookController@dashboard']);
	Route::get('/backend/book/create', ['as'=>'createBook', 'middleware'=>'auth', 'uses' => 'BookController@create']);
	Route::post('/backend/book/create', ['as'=>'createBook', 'middleware'=>'auth', 'uses' => 'BookController@store']);
	Route::get('/backend/book/delete/{id}', array('before'=>'auth.basic','as'=>'delete_book','uses'=>'BookController@destroy'));
	Route::get('/backend/book/edit/{id}', array('before'=>'auth.basic','as'=>'edit_book','uses'=>'BookController@edit'));
	Route::post('/backend/book/edit/{id}', array('before'=>'auth.basic','as'=>'edit_book','uses'=>'BookController@update'));
	Route::get('/backend/inventory/habis/{id}', array('before'=>'auth.basic','as'=>'habis_book','uses'=>'InventoryController@setHabis'));

	Route::get('/backend/order', ['middleware'=>'auth', 'uses' => 'OrderController@dashboard']);
	Route::get('/backend/order/delete/{id}', array('before'=>'auth.basic','as'=>'delete_order','uses'=>'OrderController@destroy'));
	Route::get('/backend/order/confirmed/{id}', array('before'=>'auth.basic','as'=>'confirmed_order','uses'=>'OrderController@orderConfirmed3'));
	Route::get('/backend/order/edit/{id}', array('before'=>'auth.basic','as'=>'edit_order','uses'=>'OrderController@edit'));

	Route::get('/backend/account', [ 'middleware'=>'auth', 'uses' => 'UserController@dashboard']);
	Route::get('/backend/account/delete/{id}', array('before'=>'auth.basic','as'=>'delete_user','uses'=>'UserController@destroy'));
	Route::get('/backend/account/edit/{id}', array('before'=>'auth.basic','as'=>'delete_user','uses'=>'UserController@edit'));
	
	Route::get('/backend/penulis', [ 'middleware'=>'auth', 'uses' => 'AuthorController@getIndex']);
	Route::get('/backend/penulis/create', [ 'middleware'=>'auth', 'uses' => 'AuthorController@create']);
	Route::post('/backend/penulis/create', [ 'middleware'=>'auth', 'uses' => 'AuthorController@store']);
	Route::get('/backend/penulis/edit/{id}', [ 'as'=>'edit_authors', 'middleware'=>'auth', 'uses' => 'AuthorController@edit']);
	Route::post('/backend/penulis/edit/{id}', [ 'as'=>'edit_authors', 'middleware'=>'auth', 'uses' => 'AuthorController@update']);
	Route::get('/backend/penulis/delete/{id}', [ 'as' => 'delete_authors', 'middleware'=>'auth', 'uses' => 'AuthorController@destroy']);

	Route::get('/backend/penerbit', [ 'middleware'=>'auth', 'uses' => 'PenerbitController@getIndex']);
	Route::get('/backend/penerbit/create', [ 'middleware'=>'auth', 'uses' => 'PenerbitController@create']);
	Route::post('/backend/penerbit/create', [ 'middleware'=>'auth', 'uses' => 'PenerbitController@store']);
	Route::get('/backend/penerbit/edit/{id}', [ 'as'=>'edit_penerbit', 'middleware'=>'auth', 'uses' => 'PenerbitController@edit']);
	Route::post('/backend/penerbit/edit/{id}', [ 'as'=>'edit_penerbit', 'middleware'=>'auth', 'uses' => 'PenerbitController@update']);
	Route::get('/backend/penerbit/delete/{id}', [ 'as' => 'delete_penerbit', 'middleware'=>'auth', 'uses' => 'PenerbitController@destroy']);

	Route::get('/backend/inventory', [ 'middleware'=>'auth', 'uses' => 'InventoryController@getIndex']);
	Route::get('/backend/inventory/create', [ 'middleware'=>'auth', 'uses' => 'InventoryController@create']);
	Route::post('/backend/inventory/create', [ 'middleware'=>'auth', 'uses' => 'InventoryController@store']);
	Route::get('/backend/inventory/edit/{id}', [ 'as'=>'edit_inv', 'middleware'=>'auth', 'uses' => 'InventoryController@edit']);
	Route::post('/backend/inventory/edit/{id}', [ 'as'=>'edit_inv', 'middleware'=>'auth', 'uses' => 'InventoryController@update']);
	Route::get('/backend/inventory/delete/{id}', [ 'as' => 'delete_inv', 'middleware'=>'auth', 'uses' => 'InventoryController@destroy']);

});
