<?php
use App\Address;

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


//PRODUCT ROUTES

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products', 'ProductsManagementController@index');

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/create', 'ProductsManagementController@create');
	Route::post('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/create', 'ProductsManagementController@store');

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/{productId}/edit', 'ProductsManagementController@edit');
	Route::put('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/{productId}/edit', 'ProductsManagementController@update');

	Route::get('user/{userId}/Categories/{categoryId}/Sub_categories/{subCategoryId}/Products/{productId}/delete', 'ProductsManagementController@destroy');

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

	Route::post('user/{userId}/Invoices', 'InvoicesController@store');

//INVOICELINES ROUTES
	Route::get('user/{userId}/Invoices', 'Invoice_linesController@index');
	Route::get('user/{userId}/Invoices/{invoiceId}', 'Invoice_linesController@show');

	Route::post('user/{userId}/Invoices{invoiceId}/Invoice_lines/create', 'Invoice_linesController@store');


//LOGIN ROUTES
	//Route::post('login', 'LoginController@store');


// AUTH ROUTES
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->get('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        $this->post('register', 'Auth\RegisterController@register');

        // Password Reset Routles...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');


//
Route::get('user/{userId}', 'UsersController@index');
Route::get('user/{userId}/productManagement', 'UsersController@productManagement');


Route::get('/', function() {
	return view('partials.index');
});

Route::get('/home', function() {
	return view('partials.index');
});

Route::get('/products', function() {
	return view('partials.showProducts');
});

Route::get('/myCart', function() {
	return view('partials.cart');
});
