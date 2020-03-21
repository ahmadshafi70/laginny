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


Auth::routes(['verify'=>true]);
Route::get('admin/login','Auth\LoginController@showLoginForm')->name('admin.login');

Route::group(['middleware' => ['Is_admin']], function () {
Route::prefix('admin')->group(function(){
  		// Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
   	 	Route::post('adminlogin','Auth\LoginController@login')->name('admin.login');
		Route::get('/dashboard','AdminHomeController@index')->name('admin.dashboard');
	
Route::prefix('products')->group(function(){
		Route::get('viewproducts','ProductsController@showproducts')->name('viewproducts');
		Route::get('showproductsform','ProductsController@showaddform')->name('showproductsform');
		Route::get('showproducts','ProductsController@showproducts')->name('showproducts');

		Route::post('addproducts','ProductsController@addproducts')->name('admin.products.addproducts');
		Route::get('editproducts/{id}','ProductsController@editproducts')->name('editproducts');
		Route::get('deleteproducts/{id}','ProductsController@deleteproducts')->name('deleteproducts');
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

Route::prefix('inquiry')->group(function(){
	Route::get('showinquiry','InquiryController@index')->name('showinquiry');
	Route::get('changestatus/{id}/{status}', 'InquiryController@changestatus')->name('changestatus');
	Route::get('editinquiry/{id}', 'InquiryController@editinquiry')->name('editinquiry');
	Route::post('updateinquiry', 'InquiryController@updateinquiry')->name('updateinquiry');

});
Route::prefix('user')->group(function(){
	Route::get('showusers','AdminUserController@showusers')->name('showusers');
	// Route::get('changestatus/{id}/{status}', 'InquiryController@changestatus')->name('changestatus');
	Route::get('editusers/{id}', 'AdminUserController@editusers')->name('editusers');
	Route::post('updateusers', 'AdminUserController@updateusers')->name('admin.user.updateusers');
	Route::get('showadduserform', 'AdminUserController@showadduserform')->name('showadduserform');
	Route::post('addusers', 'AdminUserController@addusers')->name('admin.user.addusers');

});
Route::prefix('role')->group(function(){
	Route::get('showrole','UserRoleController@showrole')->name('showrole');
	// Route::get('changestatus/{id}/{status}', 'InquiryController@changestatus')->name('changestatus');
	Route::get('editrole/{id}', 'UserRoleController@editrole')->name('editrole');
	Route::post('updaterole', 'UserRoleController@updaterole')->name('admin.role.updaterole');
	Route::get('showaddroleform', 'UserRoleController@showaddroleform')->name('showaddroleform');
	Route::post('addrole', 'UserRoleController@addrole')->name('admin.role.addrole');

});


});
});

Route::group(['middleware'=>['Is_user']],function(){

// Route::prefix('/user')->function(){
// //user Routes 	
// }

});

Auth::routes();
// Route::middleware('Is_user')->get('/user', 'HomeController@index')->name('user');
// Route::get('/home','HomeController@index')->name('home');
