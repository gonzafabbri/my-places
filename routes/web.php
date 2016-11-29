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
    return view('index');
});
Route::get('/inicio', function(){
  return view('inicio');
})->name('inicio');
Route::get('/registro', function(){
    return view('registro');
})->name('registro');
Route::get('/faq', function(){
  return view('faq');
})->name('faq');
Route::post('/registro', 'RegisterController@validator');

Route::post('/registro', 'RegisterController@create');

Route::group(['middleware'=>'auth'], function(){
  Route::get('mis-posts', 'HomeController@displayPosts');
  Route::get('mi-perfil', 'HomeController@displayProfile');
});

Route::get('/home', 'HomeController@index');
