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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
});

$adminGroup = [
	"prefix" => "admin",
	"as" => "admin."
];

Route::group($adminGroup, function () {

    Route::get('login', 'AuthController@login')
    ->name('login');

    Route::post('login', 'AuthController@loginSubmit')
    ->name('login-submit');

    Route::group(["middleware" => "auth:admin"], function () {

        Route::post('logout', 'AuthController@logout')
        ->name('logout');

        Route::get('/', 'AdminController@admin');

        Route::get('/dashboard', 'AdminController@index')
        ->name('dashboard');

        Route::get('/seller', 'SellerController@index')
        ->name('seller');
        Route::get('/seller/{id}/show', 'SellerController@show')
        ->name('seller.show');
        Route::get('/seller/{id}/product-list', 'SellerController@productList')
        ->name('seller.product-list');

        Route::get('/buyer', 'BuyerController@index')
        ->name('buyer');
        Route::get('/buyer/{id}/show', 'BuyerController@show')
        ->name('seller.show');
        Route::get('/buyer/{id}/product-list', 'BuyerController@productList')
        ->name('seller.product-list');

        Route::get('/products', 'ProductController@index')
        ->name('products');
        Route::get('/products/{id}/show', 'ProductController@show')
        ->name('product.show');

        Route::get('/ordrers', 'OrderController@index')
        ->name('orders');
        Route::get('/orders/{id}/show', 'OrderController@show')
        ->name('order.show');
        Route::post('/orders/{id}/confirm', 'OrderController@orderConfirm')
        ->name('order.confirm');

        Route::get('/confirm-orders', 'ConfirmOrderController@index')
        ->name('confirm-orders');
        Route::get('/confirm-orders/{id}/show', 'ConfirmOrderController@show')
        ->name('confirm-orders.show');

        Route::get('/sold', 'SoldController@index')
        ->name('sold');
        Route::get('/sold/{id}/show', 'SoldController@show')
        ->name('sold.show');

        Route::resource('ads', 'AdsController');

        Route::resource('slider', 'Configuration\SliderController');
    });

});
