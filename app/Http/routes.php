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
});
