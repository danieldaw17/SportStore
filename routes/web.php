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


Route::get('/sport', function() {
	return view('sportForm');
});

Route::get('/', function() {
	return view('partials.index');
});


Route::patch('/user/{userId}/sports/{sportId}/edit', 'SportsController@store');
