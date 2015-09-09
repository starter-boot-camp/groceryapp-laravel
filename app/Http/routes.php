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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','ProductController@index');
Route::get('/login','Auth\AuthController@getLogin');
Route::post('/login','Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

Route::post('/register',"Auth\AuthController@postRegister");

Route::get('/cart','OrderController@checkout');
Route::post('/order/store','OrderController@store');
Route::get('/addtocart/{id}','OrderController@addToCart');
