<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('categories', 'categoryAPIController');

Route::resource('brands', 'brandAPIController');

Route::resource('products', 'productAPIController');

Route::resource('advertisments', 'advertismentAPIController');

Route::resource('promotions', 'promotionsAPIController');

Route::resource('posts', 'postAPIController');

Route::resource('events', 'eventsAPIController');

Route::resource('vendors', 'vendorsAPIController');

Route::resource('vendors', 'vendorsAPIController');

Route::resource('packages', 'packagesAPIController');

Route::resource('users_tables', 'users_tableAPIController');

Route::resource('interior_design_offices', 'interior_design_officesAPIController');

Route::resource('vendor_guys', 'vendor_guyAPIController');

Route::resource('new_products', 'new_productAPIController');

Route::resource('productzs', 'productzAPIController');