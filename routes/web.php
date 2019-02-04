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
    return "";
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
//Route::get('/category/subcategorie/product', function () {
  //  return view('partials.product-detail');
 
//});

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
Route::get('/categories/{categoryId}','CategoriesController@show');

// Pasar nombre de la categoria, subcategoria (sql)
Route::get('/categories/{categoryId}/sub_categories/{subCategoryId}','Sub_categoriesController@show'); 
    //Mostrara un producto completo apartir de su id viniendo desde la url

Route::get('/categories/{categoryId}/sub_categories/{subCategoryId}/product/{productId}','ProductsController@show');
    //Mostrara un producto completo apartir de su id viniendo desde la url
    

//POR MODIFICAR:
//-STOCK RUTAS Y IMAGES RUTAS (HABLAR ENTRE TODOS).


//Rutas para las lineas de factura 
Route::get('/user/{userId}/invoice_line/{invoiceLineId}/edit','Invoice_linesController@edit');
Route::get('/user/{userId}/invoice_line/create','Invoice_linesController@create');
Route::get('/user/{userId}/invoice_line/store','Invoice_linesController@store');
Route::get('/user/{userId}/invoice_line/{invoiceLineId}/update','Invoice_linesController@update');
Route::get('/user/{userId}/invoice_line/delete','Invoice_linesController@destroy');



//rutas para las marcas 
Route::get('/user/{userId}/brands','BrandsController@index');
Route::get('/user/{userId}/brands/{brandId}/show','BrandsController@show');
Route::get('/user/{userId}/brands/{brandId}/edit','BrandsController@edit');
Route::get('/user/{userId}/brands/create','BrandsController@create');
Route::get('/user/{userId}/brands/{brandId}/update','BrandsController@update');
Route::get('/user/{userId}/brands/store','BrandsController@store');
Route::get('/user/{userId}/brands/{brandId}/destroy','BrandsController@destroy');



//Rutas para el address del usuario
Route::get('/user/{userId}/address/{addressId}/edit','AddressesController@edit');
Route::get('/user/{userId}/address/create','AddressesController@create');
Route::get('/user/{userId}/address/store','AddressesController@store');
Route::get('/user/{userId}/address/{addressId}/update','AddressesController@update');
Route::get('/user/{userId}/address/delete','AddressesController@destroy');



// Rutas para las facturas del usuario
Route::get('/user/{userId}/invoices/{invoiceId}/show','InvoicesController@show');
Route::get('/user/{userId}/invoices/{invoiceId}/edit','InvoicesController@edit');
Route::get('/user/{userId}/invoices/create','InvoicesController@create');
Route::get('/user/{userId}/invoices/store','InvoicesController@store');
Route::get('/user/{userId}/invoices/{invoiceId}/update','InvoicesController@update');
Route::get('/user/{userId}/invoices/delete','InvoicesController@destroy');

//Rutas para los sports
Route::get('/user/{userId}/sports','SportsController@index');
Route::get('/user/{userId}/sports/{sportId}/show','SportsController@show');
Route::get('/user/{userId}/sports/{sportId}/edit','SportsController@edit');
Route::get('/user/{userId}/sports/create','SportsController@create');
Route::get('/user/{userId}/sports/{sportId}/update','SportsController@update');
Route::get('/user/{userId}/sports/store','SportsController@store');
Route::get('/user/{userId}/sports/{sportId}/destroy','SportsController@destroy');

//Rutas para las deliveries
Route::get('/user/{userId}/deliveries/{deliveryId}/show','DeliveriesController@index');
Route::get('/user/{userId}/deliveries/{deliveryId}/edit','DeliveriesController@edit');
Route::get('/user/{userId}/deliveries/create','DeliveriesController@create');
Route::get('/user/{userId}/deliveries/store','DeliveriesController@store');
Route::get('/user/{userId}/deliveries/{deliveryId}/update','DeliveriesController@update');
Route::get('/user/{userId}/deliveries/destroy','DeliveriesController@destroy');




//Route::post('/category/{subcategory}','subcategoryController@postIndex'=>)

// Pasar id del usuario
Route::get('/profile', function () {
    return view('partials.profile');
});

// Pasar id del usuario
Route::get('/user/id/mycart', function () {
    return view('partials.cart');
});

//Rutas para los controladores de dani


