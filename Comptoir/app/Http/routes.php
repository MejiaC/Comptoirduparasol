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

Route::get('/realisations', function () {
	return view('realisations');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/produits', function () {
    return view('produits');
});

Route::get('/produits/tables', function () {
    return view('produits.tables');
});

Route::get('/produits/chaises', function () {
    return view('produits.chaises');
});

Route::get('/produits/scene', function () {
	return view('produits.scene');
});
Route::get('/produits/abri', function () {
	return view('produits.abri');
});

Route::get('/produits/appareil', function () {
	return view('produits.appareil');
});

Route::get('/produits/lestages', function () {
	return view('produits.lestages');
});

Route::get('/produits/chauffage', function () {
	return view('produits.chauffage');
});

Route::get('/produits/protection', function () {
	return view('produits.protection');
});

Route::get('/produits/habillage', function () {
	return view('produits.habillage');
});


Route::get('contact',
	['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact',
	['as' => 'contact.store', 'uses' => 'AboutController@store']);
