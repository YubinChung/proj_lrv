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

//todo list
Route::get('/todo', 'TodoMainController@index');
Route::post('/todo', 'TodoController@store');
Route::post('/todo/done/{id}', ['as' => 'todo', 'uses' =>'TodoController@done']);
Route::post('/todo/{id}', ['as' => 'todo', 'uses' =>'TodoController@destroy']);

// Route::resource('todo', 'TodoController');


// board 
Route::resource('/post', 'PostController');

// menu
Route::get('/menu', 'MenuController@index');
Route::post('/menu', 'MenuController@store');

// page
Route::get('/', 'MainController@index');
Route::get('/home', 'MainController@index');
//Route::get('/menu', 'MenuController@index');
Route::get('/{id?}', 'pageController@page' );



Route::get('/{page_id}', 'pageController@page' );



