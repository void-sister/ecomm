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


Route::resource('categories', 'CategoryController');
Route::resource('colors', 'ColorController');
Route::resource('item_models', 'ItemModelController');
Route::resource('items', 'ItemController');
Route::resource('sizes', 'SizeController');