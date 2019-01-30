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
    //->where('username', '([a-zA-z0-9]+)');

Route::get('/categories', function () {
    return "Lista de categorias";
});

Route::get('/categories/products', function () {
    return "lista de los  productos  de esa categoria ";
});

Route::get('/categories/products/{id}', function ($id) {
    return "vista de un solo producto, el producto es " . $id;
})
    ->where('id', '[a-zA-z0-9]+');
Route::get('/sign-up', function () {
    return "Pagina  de acceso al  usuario ";

});
Route::get('/sign-in', function () {
    return "Pagina  de registro del usuario";

});
Route::get('/user/{username}', function ($username) {
    //aqui tiene que estar la vista del usuario con su informacion
    return 'el usuario es ' . $username;

})
    ->where('username', '[a-zA-z0-9]+');
/*ruta opcional
Route::get('user/{id}/{name}',function($id,$name){

    return ("userController",function ($id,$name));

})
->where(['id'=>'[0-9]+','name' => '[a-z]+']);
 */
/*
Route::get('user/profile', 'UserProfileController@show');
 */
/*Comentarios para la modificacion del routing
 *El codigo de abajo sirve para redireccionar una ruta con una variale
 *return \Redirect::route('/', $username)->with('message', 'State saved correctly!!!');
 *
 */




