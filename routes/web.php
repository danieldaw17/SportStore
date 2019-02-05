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




//SPORT CONTROLLER
Route::get('user/{userId}/sports/create', function($userId) {
	return view('sportForm', array('userId'=>$userId));
});
Route::patch('user/{userId}/sports/create', 'SportsController@store');


Route::get('user/{userId}/sports/{sportId}/edit', function($userId, $sportId) {
	return view('sportForm', array('userId'=>$userId, 'sportId' => $sportId));
});
Route::patch('user/{userId}/sports/{sportId}/edit', 'SportsController@update');

Route::get('/', function() {
	return view('partials.index');
});
