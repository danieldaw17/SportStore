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
    return view('partials.index');
});

// Pasar nombre de la categoria, subcategoria y producto (sql)
Route::get('/category/subcategorie/product', function () {
    return view('partials.product-detail');
});

// Pasar nombre de la categoria y subcategoria (sql)
Route::get('/category', function () {
    return view('partials.subcategories');
});

// Pasar nombre de la categoria, subcategoria (sql)
Route::get('/category/subcategorie/products', function () {
    return view('partials.products');
});

// Pasar id del usuario
Route::get('/profile', function () {
    return view('partials.profile');
});