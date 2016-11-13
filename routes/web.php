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


Route::get('/', 'PageController@home');
Route::get('{page_id}', 'pageController@page' );


//Route::get('/{page_id?}', function ($page_id='home') {
//	$page_name2 = '';
//	$page_name2	.= 'layouts.' . $page_id;
//	
//	return view($page_name2, ['page_name' => $page_id, 'site_title' => 'CONSRTUCTION']);
//});

//Route::get('/', function () {
//    return view('layouts.home', ['page_name' => 'home']);
//});
//Route::get('/about', function () {
//	return view('layouts.about', ['page_name' => 'about']);
//	
//});
//Route::get('/portfolio', function () {
//    return view('layouts.portfolio', ['page_name' => 'portfolio']);
//});
//
//Route::get('/contact', function () {
//    return view('layouts.contact', ['page_name' => 'contact']);
//});





//Route::get('/{id}', function ($id) {
//	
//	return view('layouts.$id');
//	
//});