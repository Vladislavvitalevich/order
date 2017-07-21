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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin','prefix' => 'admin'], function(){

    Route::resource('/category', 'Admin\CategoryController');//y
    Route::resource('/product', 'Admin\ProductController');//Y
    Route::resource('/order', 'Admin\OrderController');//n

});

Route::get('/order', 'OrderController@index')->name('order');
Route::post('/order', 'OrderController@store');

Route::get('/cart', 'CartController@index')->name('cart');



