<?php

use Illuminate\Support\Facades\Route;


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




Route::get('/','PagesController@index')->name('home');
Route::get('/shirts','PagesController@shirts')->name('shirts');
Route::get('/product','PagesController@product')->name('product');



Auth::routes();


Route::get('/home','HomeController@index');
Route::get('/logout','auth\LoginController@logout');
Route::resource('/cart','CartController');
Route::get('/cart/add-items/{id}','CartController@addItem')->name('cart.addItem');


Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function()
{
    Route::get('/',function(){
        return view('admin.index');
    })->name('admin.index');
    
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');
    
});

Route::resource('address','AddressController');

Route::get('checkout','CheckoutController@step1');
Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');






