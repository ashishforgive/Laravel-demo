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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact/submit', 'massagesController@submit');
Route::get('/massages', 'massagesController@getmassage');
Route::get('/product', 'myproductsController@getmyproducts');
Route::get('/', 'myproductsController@getmyproductsonindex');

Route::post('/home/add', 'myproductsController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
