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

	Route::get('/backend/dashboard', ['as'=>'index', 'middleware'=>'auth', 'uses' => 'BookController@dashboard']);

	Route::get('/backend/book', ['as'=>'index', 'middleware'=>'auth', 'uses' => 'BookController@dashboard']);
	Route::get('/backend/book/delete/{id}', array('before'=>'auth.basic','as'=>'delete_book','uses'=>'BookController@destroy'));
	Route::get('/backend/book/edit/{id}', array('before'=>'auth.basic','as'=>'delete_book','uses'=>'BookController@edit'));

	Route::get('/backend/order', ['as'=>'index', 'middleware'=>'auth', 'uses' => 'OrderController@dashboard']);
	Route::get('/backend/order/delete/{id}', array('before'=>'auth.basic','as'=>'delete_order','uses'=>'OrderController@destroy'));
	Route::get('/backend/order/edit/{id}', array('before'=>'auth.basic','as'=>'delete_order','uses'=>'OrderController@edit'));

	Route::get('/backend/account', ['as'=>'index', 'middleware'=>'auth', 'uses' => 'UserController@dashboard']);
	Route::get('/backend/account/delete/{id}', array('before'=>'auth.basic','as'=>'delete_user','uses'=>'UserController@destroy'));
	Route::get('/backend/account/edit/{id}', array('before'=>'auth.basic','as'=>'delete_user','uses'=>'UserController@edit'));
});
