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


Route::get('user/{userId}/sports/create', function($userId) {
	return view('sportForm', array('userId'=>$userId));
});

Route::get('/', function() {
	return view('partials.index');
});


Route::patch('user/{userId}/sports/create', 'SportsController@store');
