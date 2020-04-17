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

Route::get('/home', function () {
   return view('home');
});

Auth::routes();

Route::group(['middleware' => ['role:owner']], function () {
    Route::resource('/products', 'ProductsController');
    Route::get('products/{product}/delete', 'ProductsController@delete')->name('products.delete');
});

Route::group(['middleware' => ['role:owner|customer']], function () {
    Route::resource('/reviews', 'ReviewsController');
    Route::get('users/pdf', 'UsersController@PDF')->name('users/pdf');
});

Route::group(['middleware' => ['role:owner']], function () {
    Route::get('reviews/{review}/delete', 'ReviewsController@delete')->name('reviews.delete');
});

Route::group(['middleware' => ['role:owner']], function () {
    Route::resource('/categories', 'CategoriesController');
    Route::get('categories/{category}/delete', 'CategoriesController@delete')->name('categories.delete');
});

Route::group(['middleware' => ['role:owner']], function () {
    Route::resource('/users', 'UsersController');
    Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::get('users/{user}/delete', 'UsersController@delete')->name('users.delete');
});
