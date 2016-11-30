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
<<<<<<< HEAD
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', 'Controller@Guardar');
=======

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
<<<<<<< HEAD

Auth::routes();

Route::get('/home', 'HomeController@index');
=======
>>>>>>> 48e1c8087a4d1de709937fc0f9478a7f834d99e2
>>>>>>> f0e561cef766f881db9eef561138371d49b35272
