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
Route::get('/public', function(){
  return view('panel.public');
});
// Route::get('/registro', function () {
//     return view('registro');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Auth::routes();
// Route::get('/login', function() {
//   return view('auth.login');
// });

// Route::get('/register', function(){
//     return view('auth.register');
// });

Route::get('/perfil', 'ProfileController@indexUser');
Route::get('/perfil/{id}', 'ProfileController@index');
Route::post('editpost/{id}', 'ProfileController@update');
Route::get('borrarpost/{id}', 'ProfileController@removePostIfExists');
Route::get('editpost/{id}', 'ProfileController@edit');
Route::post('/perfil', 'ProfileController@storePost');
Route::get('/public/{id}', 'PublicController@index');
Route::get('/faq', function(){
  return view('faq');
})->name('faq');

// Route::post('/register', 'Auth\RegisterController@validator');
//
// Route::post('/register', 'Auth\RegisterController@store');
//Route::delete('/borrar-post', 'ProfileController@removePostIfExists');


Route::group(['middleware'=>'auth'], function(){
  Route::get('mis-posts', 'HomeController@displayPosts');
  Route::get('mi-perfil', 'HomeController@displayProfile');
});

Route::get('/home', 'HomeController@index');
