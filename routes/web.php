<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
/* 
Route::get('/pacientes', function () {
    return view('admin.pacientes.index');
}); */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'AdminController@index');
Route::get('/pacientes' , 'PacientesController@index')->name('pacientes.index');
Route::get('/medicinas' , 'MedicinasController@index')->name('medicinas.index');
Route::get('/directorio' , 'DirectorioController@index')->name('directorio.index');
//Route::get('/posts', 'PostsController@index');
//Route::get('/posts/create', 'PostsController@create');
//Route::get('/posts/{post}', 'PostsController@show');
//Route::post('/posts', 'PostsController@store');
//Route::get('/posts/{post}/edit', 'PostsController@edit');
//Route::patch('/posts/{post}', 'PostsController@update');
//Route::delete('/posts/{post}', 'PostsController@destroy');

Route::resource('posts', 'PostsController');

