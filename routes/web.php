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


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('categories', 'CategoriesController'); 



Route::resource('users', 'UsersController');



Route::resource('contact', 'ContactController');



Route::resource('articles', 'ArticlesController');

Route::get('cart', 'ArticlesController@cart');
 
Route::get('add-to-cart/{id}', 'ArticlesController@addToCart');

Route::post('update-cart/', 'ArticlesController@updateCart');
 
Route::post('removefromcart/', 'ArticlesController@removeCart');