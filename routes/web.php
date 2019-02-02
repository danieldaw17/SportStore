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

    return view('partials.index');

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
    return view('partials.index');
});

// Pasar nombre de la categoria, subcategoria y producto (sql)
Route::get('/category/subcategorie/product', function () {
    return view('partials.product-detail');
 
});

/*Route::get('/user/{username}', function ($username) {
    //aqui tiene que estar la vista del usuario con su informacion
    return 'el usuario es ' . $username;

})
    ->where('username', '[a-zA-z0-9]+');
    */
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






// Pasar nombre de la categoria y subcategoria (sql)
Route::get('/category/{categoryId}', function () {

    //esto muestra todos las subcategoria de una categoria 
    
});

// Pasar nombre de la categoria, subcategoria (sql)
Route::get('/categories/{categoryId}/sub_categories/{subCategoryId}', function () {
    //Mostrara un producto completo apartir de su id viniendo desde la url
});


// Pasar nombre de la categoria, subcategoria (sql)
Route::get('/user/{userId}', function () {
    return "hola";
    //pagina que muestra el perfil con la id de ese usuario
});

//Route::post('/category/{subcategory}','subcategoryController@postIndex'=>)
