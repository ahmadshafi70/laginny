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
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});
Route::get('test1', function () {
    return view('test1');
});
Route::get('products', function () {
    return view('products');
});
Route::prefix('admin')->group(function(){
  		Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
   	 	Route::post('/login','Auth\LoginController@login')->name('admin.login');
		Route::get('/dashboard','AdminHomeController@index')->name('admin.dashboard');
	
	Route::prefix('products')->group(function(){
		Route::get('viewproducts','ProductsController@show')->name('viewproducts');
		Route::get('showproductsform','ProductsController@showaddform')->name('showproductsform');
		Route::get('showproducts','ProductsController@showproducts')->name('showproducts');

		Route::post('addproducts','ProductsController@addproducts')->name('admin.products.addproducts');

	Route::prefix('productscategory')->group(function(){
		Route::get('viewprocat','ProductsController@show')->name('viewprocat');
		Route::get('showprocatform','ProductsController@showaddform')->name('showprocatform');
		Route::get('showprocat','ProductsController@showproducts')->name('showcat');

		Route::post('addprocat','ProductsController@addproducts')->name('admin.products.addprocat');

});

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
