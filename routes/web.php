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

/**
 * Configurar las rutas para la aplicacion SportStore
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('welcome');
});

Route::get('/products/{id}', function ($id) {
    return view('welcome');
})
    ->where('id', '([0-9]+)');
