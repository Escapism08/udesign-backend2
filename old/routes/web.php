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
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('categories', 'categoryController');

Route::resource('brands', 'brandController');

Route::resource('products', 'productController');

Route::resource('advertisments', 'advertismentController');

Route::resource('promotions', 'promotionsController');

Route::resource('posts', 'postController');

Route::resource('events', 'eventsController');

Route::resource('vendors', 'vendorsController');

Route::resource('vendors', 'vendorsController');

Route::resource('packages', 'packagesController');


Route::resource('vendorGuys', 'vendor_guyController');

Route::resource('newProducts', 'new_productController');

Route::resource('productzs', 'productzController');