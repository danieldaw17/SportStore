<?php
use App\Address;
use Gloudemans\Shoppingcart\Facades\Cart;

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
Auth::routes();

//SPORT ROUTES
	Route::get('user/{userId}/sports', 'SportsController@index');

	Route::get('user/{userId}/sports/create', 'SportsController@create');
	Route::post('user/{userId}/sports/create', 'SportsController@store');

	Route::get('user/{userId}/sports/{sportId}/edit', 'SportsController@edit');
	Route::put('user/{userId}/sports/{sportId}/edit', 'SportsController@update');

	Route::get('user/{userId}/sports/{sportId}/delete', 'SportsController@destroy');

//BRAND ROUTES
	Route::get('user/{userId}/brands', 'BrandsController@index');

	Route::get('user/{userId}/brands/create', 'BrandsController@create');
	Route::post('user/{userId}/brands/create', 'BrandsController@store');

	Route::get('user/{userId}/brands/{brandId}/edit', 'BrandsController@edit');
	Route::put('user/{userId}/brands/{brandId}/edit', 'BrandsController@update');

	Route::get('user/{userId}/brands/{brandId}/delete', 'BrandsController@destroy');

//DELIVERY ROUTES
	Route::get('user/{userId}/deliveries', 'DeliveriesController@index');

	Route::get('user/{userId}/deliveries/create', 'DeliveriesController@create');
	Route::post('user/{userId}/deliveries/create', 'DeliveriesController@store');

	Route::get('user/{userId}/deliveries/{deliveryId}/edit', 'DeliveriesController@edit');
	Route::put('user/{userId}/deliveries/{deliveryId}/edit', 'DeliveriesController@update');

	Route::get('user/{userId}/deliveries/{deliveryId}/delete', 'DeliveriesController@destroy');

// PRODUCTS DEACTIVATED
	// Productos desactivados
	Route::get('user/{userId}/deactivated', 'ProductsManagementController@deactivated');
	// Activar producto
	Route::get('user/{userId}/product/{productId}/activate', 'ProductsManagementController@activate');

// PRODUCTS WITH LITTLE STOCK
	// Productos con stock menor a "x"
	Route::get('checkStock', 'StocksController@searchStock');
	Route::get('checkStock/action', 'StocksController@action')->name('checkStock.action');

//PRODUCT ROUTES

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products', 'ProductsManagementController@index');

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/create', 'ProductsManagementController@create');
	Route::post('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/create', 'ProductsManagementController@store');

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/{productId}/edit', 'ProductsManagementController@edit');
	Route::put('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/{productId}/edit', 'ProductsManagementController@update');

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/{productId}/delete', 'ProductsManagementController@destroy');
	Route::get('defuse/{productId}', 'ProductsManagementController@defuse');
//BILLING ADDRESS ROUTES


//SHIPPING Address

//CATEGORY ROUTES
	Route::get('user/{userId}/Categories', 'CategoriesController@index');

	Route::get('user/{userId}/Categories/create', 'CategoriesController@create');
	Route::post('user/{userId}/Categories/create', 'CategoriesController@store');

	Route::get('user/{userId}/Categories/{categoryId}/edit', 'CategoriesController@edit');
	Route::put('user/{userId}/Categories/{categoryId}/edit', 'CategoriesController@update');

	Route::get('user/{userId}/Categories/{categoryId}/delete', 'CategoriesController@destroy');

//SUB_CATEGORY ROUTES
	Route::get('user/{userId}/Categories/{categoryId}', 'Sub_categoriesController@index');

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/create', 'Sub_categoriesController@create');
	Route::post('user/{userId}/Categories/{categoryId}/Sub_categories/create', 'Sub_categoriesController@store');

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/edit', 'Sub_categoriesController@edit');
	Route::put('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/edit', 'Sub_categoriesController@update');

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/delete', 'Sub_categoriesController@destroy');

//INVOICE ROUTES
	Route::get('user/{userId}/Invoices', 'InvoicesController@index');
	Route::get('user/{userId}/Invoices/{invoiceId}', 'InvoicesController@show');

	Route::get('generateInvoice/delivery/{deliveryId}', 'InvoicesController@store');

//INVOICELINES ROUTES
	Route::get('user/{userId}/Invoices', 'Invoice_linesController@index');
	Route::get('user/{userId}/Invoices/{invoiceId}', 'Invoice_linesController@show');

	Route::get('generateInvoiceLines/{invoiceId}', 'Invoice_linesController@store');


;




Route::get('user/{userId}', 'UsersController@index');
Route::get('user/{userId}/productManagement', 'UsersController@productManagement');

// NO ADMIN ROUTES (SIN USUARIO, VISITANTE)

	// Carga las categorias y subcategorias en el nav
	Route::get('/', 'indexController@getCategorias')->name('funciona');

	// Muestra subcategorias
	Route::get('categories/{categoryId}', 'FrontController@showSubcategories');

	// Muestra productos
	Route::get('sub_categories/{subCategoryId}', 'FrontController@showProducts');

	// Muestra detalle del producto
	Route::get('product/{productId}', 'FrontController@showProduct');

	Route::post('profile/billingAddress', 'profileController@saveBillingAddress');
	Route::post('profile/shippingAddress', 'profileController@saveShippingAddress');
	Route::post('profile/personalInformation', 'profileController@savePersonalInformation');
	Route::post('profile/account', 'profileController@saveAccount');




//rutas del carrito
Route::get('mycart','CartController@index')->name('cart.index');
Route::post('mycart','CartController@store')->name('cart.store');
Route::delete('mycart/{product}','CartController@destroy')->name('cart.destroy');
Route::patch('mycart/{product}','CartController@update')->name('cart.update');
//rutas del checkout poner middleware('auth') cuando el usuario login y register esten terminados
Route::get('checkout','CheckoutController@index')->name('checkout.index');

Route::post('checkout','CheckoutController@store')->name('checkout.store');

Route::get('thankyou','ConfirmationController@index')->name('confirmation.index');

Route::get('empty',function(){
	Cart::destroy();

});
// Muestra resultados de la busqueda
Route::get('search', 'SearchController@search');
Route::post('search', 'SearchController@search');
Route::get('ajax_subcat','SearchController@ajaxSubcategories');
