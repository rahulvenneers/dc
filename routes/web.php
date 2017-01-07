<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'auth'], function(){
    // your routes

   Route::get('/', function () {
    return view('welcome');
   
});
  Route::get('/emirate/{emirate}/store/create', 'StoreController@create');
  Route::post('/store/create','StoreController@store');
});



Auth::routes();

Route::get('/home', 'HomeController@index');