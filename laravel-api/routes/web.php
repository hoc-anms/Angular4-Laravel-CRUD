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
// Get list of Products
Route::get('products','ProductController@index');

// Get specific Product
Route::get('product/{id}','ProductController@show');

// Delete a Product
Route::delete('product/{id}','ProductController@destroy');

// Update existing Product
Route::put('product/{id}','ProductController@update');

// Create new Product
Route::post('product','ProductController@store');