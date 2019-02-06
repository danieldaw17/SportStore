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

//SPORT ROUTES

	Route::get('user/{userId}/sports/create', 'SportsController@create');
	Route::post('user/{userId}/sports/create', 'SportsController@store');

	Route::get('user/{userId}/sports/{sportId}/edit', 'SportsController@edit');
	Route::put('user/{userId}/sports/{sportId}/edit', 'SportsController@update');

	Route::get('user/{userId}/sports/{sportId}/delete', 'SportsController@destroy');

//BRAND ROUTES

	Route::get('user/{userId}/brands/create', 'BrandsController@create');
	Route::post('user/{userId}/brands/create', 'BrandsController@store');

	Route::get('user/{userId}/brands/{brandId}/edit', 'BrandsController@edit');
	Route::put('user/{userId}/brands/{brandId}/edit', 'BrandsController@update');

	Route::get('user/{userId}/brands/{brandId}/delete', 'BrandsController@destroy');



Route::get('/', function() {
	return view('partials.index');
});
