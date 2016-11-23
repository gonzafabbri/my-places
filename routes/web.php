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

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', 'Controller@Guardar');
=======

Route::get('/registro', function(){
    return view('registro');
});

Route::post('/registro', 'RegisterContorller@validator');

Route::post('/registro', 'RegisterContorller@create');

Route::group(['middleware'=>'auth'], function(){
  Route::get('mis-posts', 'HomeController@displayPosts');
  Route::get('mi-perfil', 'HomeController@displayProfile');
});

Route::get('/home', 'HomeController@index');
>>>>>>> 48e1c8087a4d1de709937fc0f9478a7f834d99e2
