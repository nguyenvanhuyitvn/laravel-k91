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

// Route::get('/', function () {
//     return view('welcome');
// });


// FrontEnd

Route::group(['prefix' => '/', 'namespace'=>'Frontend'], function () {
    Route::get('/', 'FrontendController@index')->name('frontend.index');
    // About
    Route::get('/about', 'FrontendController@about')->name('about');
    // Contact
    Route::get('/contact', 'FrontendController@contact')->name('contact');

    // Product
    Route::group(['prefix' => 'product', 'namespace'=>'Product'], function () {
        Route::get('/shop', 'ProductController@shop')->name('product.shop');
        Route::get('/detail', 'ProductController@detail')->name('product.detail');
    });
    // Cart
    Route::group(['prefix' => 'cart', 'namespace'=>'Cart'], function () {
        Route::get('/cart', 'CartController@cart')->name('cart');
        Route::get('/checkout', 'CartController@checkout')->name('checkout');
        Route::get('/complete', 'CartController@complete')->name('complete');
    });
   
});

// BackEnd
Route::get('login', 'Backend\Auth\LoginController@login')->name('login')->middleware('CheckLogout');
Route::post('login', 'Backend\Auth\LoginController@postLogin');

Route::group(['prefix' => 'admin', 'namespace' => 'Backend','middleware'=>'CheckLogin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/logout','AdminController@logout')->name('logout');
    // Product
    Route::group(['prefix' => 'product', 'namespace'=>'Product'], function () {
        Route::get('/', 'ProductController@index')->name('product.index');
        Route::get('create', 'ProductController@create')->name('product.create');
        Route::post('store', 'ProductController@store')->name('product.store');
        Route::get('edit', 'ProductController@edit')->name('product.edit');
    });
    // Category
    Route::group(['prefix' => 'category','namespace'=>'Category'], function () {
        Route::get('/', 'CategoryController@listcategory')->name('category.index');
        Route::get('edit', 'CategoryController@editcategory')->name('category.edit');
    });
    // Order
    Route::group(['prefix' => 'orders','namespace'=>'Order'], function () {
        Route::get('/', 'OrderController@orders')->name('orders');
        Route::get('/detail', 'OrderController@ordersdetail')->name('orders.detail');
        Route::get('/process', 'OrderController@process')->name('orders.process');
    });
    // User
    Route::group(['prefix' => 'user','namespace'=>'User'], function () {
        Route::get('/', 'UserController@listuser')->name('user');
        Route::get('create', 'UserController@adduser')->name('user.create');
        Route::get('edit', 'UserController@edituser')->name('user.edit');
    });
});


