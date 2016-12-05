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
    return view('inicio');
});
Route::get('/perfil', function(){
  return view('panel.perfil');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function() {
  return view('auth.login');
});

Route::get('/register', function(){
    return view('auth.register');
});

Route::get('/faq', function(){
  return view('faq');
})->name('faq');

Route::post('/register', 'Auth\RegisterController@validator');

Route::post('/register', 'Auth\RegisterController@store');

Route::group(['middleware'=>'auth'], function(){
  Route::get('mis-posts', 'HomeController@displayPosts');
  Route::get('mi-perfil', 'HomeController@displayProfile');
});

Route::get('/home', 'HomeController@index');


Auth::routes();
