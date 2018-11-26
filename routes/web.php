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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sell', 'SellController@index')->name('sell');
Route::post('/sell/add-product', 'SellController@addProduct');
Route::get('/buy', 'BuyController@index')->name('buy');
Route::get('/buy/cart', 'BuyController@cart')->name('cart');
Route::get('/buy/add-to-cart/{id}', 'BuyController@addToCart')->name('addToCart');
Route::get('/buy/delete-from-cart/{id}', 'BuyController@deleteFromCart')->name('deleteFromCart');