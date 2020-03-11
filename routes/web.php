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
Route::get('test12', function () {
    return view('test1');
});
Route::get('productsdetails/{id}','HomeProductController@productsdetails')->name('productsdetails');
Route::get('aboutus','HomeProductController@aboutus')->name('aboutus');
Route::get('contactus','HomeProductController@contactus')->name('contactus');
Route::get('reviewvideo','HomeProductController@reviewvideo')->name('reviewvideo');
Route::get('contactus','HomeProductController@contactus')->name('contactus');
Route::get('products','HomeProductController@products')->name('products');
Route::post('sendmail','MailController@sendmail')->name('sendmail');


Route::get('searchbycategory/{id}','SearchbyCategoryController@searchbycategory'
)->name('searchbycategory');


Route::prefix('admin')->group(function(){
  		Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
   	 	Route::post('/login','Auth\LoginController@login')->name('admin.login');
		Route::get('/dashboard','AdminHomeController@index')->name('admin.dashboard');
	
Route::prefix('products')->group(function(){
		Route::get('viewproducts','ProductsController@showproducts')->name('viewproducts');
		Route::get('showproductsform','ProductsController@showaddform')->name('showproductsform');
		Route::get('showproducts','ProductsController@showproducts')->name('showproducts');

		Route::post('addproducts','ProductsController@addproducts')->name('admin.products.addproducts');
		Route::get('editproducts/{id}','ProductsController@editproducts')->name('editproducts');
		Route::post('updateproducts','ProductsController@updateproducts')->name('admin.products.updateproducts');



});
Route::prefix('productscategory')->group(function(){
		Route::get('viewprocat','ProductsCategoryController@index')->name('viewprocat');
		Route::get('showprocatform','ProductsCategoryController@showprocatform')->name('showprocatform');
		Route::get('editprocat/{id}','ProductsCategoryController@editprocat')->name('editprocat');
		// Route::get('showprocat','ProductsController@showproducts')->name('showcat');
		Route::post('addprocat','ProductsCategoryController@addprocat')->name('admin.productscategory.addprocat');
		Route::post('updateprocat','ProductsCategoryController@updateprocat')->name('updateprocat');
});
});


Auth::routes();

Route::get('/home','HomeController@index')->name('home');
