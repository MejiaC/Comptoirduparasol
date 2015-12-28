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

/* VIEWS */

Route::get('/', function () {
    return view('index');
});


Route::get('/products', function () {
	return view('products');
});

Route::get('/index', function () {
	return view('index');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/services', function () {
    return view('services');
});




/* AUTRES */

Route::controller('email', 'EmailController');



