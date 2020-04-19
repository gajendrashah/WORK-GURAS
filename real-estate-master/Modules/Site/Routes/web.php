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
use App\Http\Middleware\SellerAuthMiddleware;
use App\Http\Middleware\BuyerAuthMiddleware;

Route::prefix('site')->group(function() {
    //Route::get('/', 'SiteController@index');
});

Route::get('/', 'HomeController@index')->name('home');


Route::get('/product', 'ProductController@products')->name('products');

Route::get('/land-measurement', 'LandCalculatorController@index')->name('land-measurement.index');

Route::get('/agent', 'AgentController@index')->name('agents');

Route::get('/agent/1', 'AgentController@single')->name('singleagent');

Route::get('/products/search', 'ProductController@search')->name('product-list.search');

Route::get('/products/advsearch', 'ProductController@advsearch')->name('product-list.advsearch');

Route::get('/products/search/{column}/{name}', 'ProductController@searchCity')->name('product-list.searchCity');

Route::get('/product/{slug}/details', 'ProductController@productDetails')->name('product.details');

Route::get('product/{id}/booking', ['as' => 'product.booking', 'uses' => 'ProductController@productBooking']);

Route::Post('product/{id}/booking', ['as' => 'product.booking.submit', 'uses' => 'ProductController@productBookingSubmit']);

Route::get('/contact-us', 'HomeController@contactus')->name('contactus');

Route::get('/help/buying-guide', 'HomeController@buyingGuide')->name('buyingguide');

Route::get('/help/selling-guide', 'HomeController@sellingGuide')->name('sellingguide');

Route::get('/help/tips-guides', 'HomeController@tipsGuide')->name('tips-guide');

Route::get('/help/tips-guides/buying-tips', 'HomeController@buyingTips')->name('buying-tips');

Route::get('/help/tips-guides/roi-tips', 'HomeController@roiTips')->name('roi-tips');

Route::get('/help/tips-guides/legalServices', 'HomeController@legalServices')->name('legalServices');

Route::post('subscription', 'SubscriptionController@subscription')
    ->name('subscription-submit');

Route::post('contact-us', 'ContactController@contact')
    ->name('contact-submit');

Route::get('/user', 'SiteController@index');

Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('login', ['as' => 'login.post', 'uses' => 'AuthController@authenticate']);

Route::get('register', ['as' => 'register', 'uses' => 'AuthController@register']);
Route::post('register', ['as' => 'register.post', 'uses' => 'AuthController@registerPost']);

Route::get('forgot-password', ['as' => 'forgot-password', 'uses' => 'AuthController@forgotPassword']);
Route::post('forgot-password', ['as' => 'forgot-password.post', 'uses' => 'AuthController@forgotPasswordPost']);

Route::get('reset-password', ['as' => 'reset-password', 'uses' => 'AuthController@resetPassword']);
Route::post('reset-password', ['as' => 'reset-password.post', 'uses' => 'AuthController@resetPasswordPost']);

Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::group(["middleware" => "auth:web"], function () {

    Route::group(['prefix' => 'account', "as"=> "account.",], function () {
        Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'AccountController@dashboard']);
        Route::get('/change-password', ['as' => 'change.password', 'uses' => 'AccountController@changePassword']);
        Route::post('/change-password', ['as' => 'change.password.post', 'uses' => 'AccountController@changePasswordPost']);

        Route::get('/change-info', ['as' => 'change.info', 'uses' => 'AccountController@changeInfo']);
        Route::post('/change/info', ['as' => 'change.info.post', 'uses' => 'AccountController@changeInfoPost']);

        Route::get('/email-varification', ['as' => 'email-varification', 'uses' => 'AccountController@emailVarification']);
        Route::post('/email-varification', ['as' => 'email-varification.submit', 'uses' => 'AccountController@emailVarificationSubmit']);

        Route::get('/resend-varification-code', ['as' => 'resend-varification-code', 'uses' => 'AccountController@resendVarificationCode']);

    });

    Route::group(["prefix" => "buyer", "as"=> "buyer.", 'namespace'=>'Buyer', "middleware" => BuyerAuthMiddleware::class], function () {

        Route::get('/buy/product/list', ['as' => 'buy.product.index', 'uses' => 'BuyerController@index']);

        Route::get('/buy/product/{product_id}/detail', ['as' => 'buy.product.show', 'uses' => 'BuyerController@show']);

        Route::get('/buy/product/datatable', ['as' => 'buy.product.datatable', 'uses' => 'BuyerController@getBuyBasicData']);
        
    });

    Route::group(["prefix" => "seller", "as"=> "seller.", 'namespace'=>'Seller', "middleware" => SellerAuthMiddleware::class], function () {
        
        Route::resource('property', 'SellerController');
        Route::get('/property/{property_type}/load-page', ['as' => 'property-type.form-load', 'uses' => 'SellerController@propertyTypeFormLoad']);
        Route::Post('property/additional-image', ['as' => 'property.additional-image', 'uses' => 'SellerController@additionalUpload']);
        Route::get('/property-list/datatable', ['as' => 'property.datatable', 'uses' => 'SellerController@getBasicData']);

        Route::get('/property/orders/list', ['as' => 'property.orders.list', 'uses' => 'OrderController@index']);
        Route::get('/property/orders/datatable', ['as' => 'property.orders.datatable', 'uses' => 'OrderController@getOrdersBasicData']);
        Route::Post('/property/order/{id}/confirm', ['as' => 'property.order.confirm', 'uses' => 'OrderController@orderConfirm']);
        Route::get('/property/order/{id}/show', ['as' => 'property.order.show', 'uses' => 'OrderController@show']);
        
        Route::get('/property/sales/list', ['as' => 'property.sales.list', 'uses' => 'SalesController@index']);
        Route::get('/property/sales/datatable', ['as' => 'property.sales.datatable', 'uses' => 'SalesController@getSalesBasicData']);
        Route::get('/property/sales/{id}/show', ['as' => 'property.sales.show', 'uses' => 'SalesController@show']);

        Route::get('/buy/product/{id}/detail', ['as' => 'buy.product.detail', 'uses' => 'BuyController@show']);
        Route::get('/buy/product/list', ['as' => 'buy.product.list', 'uses' => 'BuyController@index']);
        Route::get('/property/buy/datatable', ['as' => 'buy.product.datatable', 'uses' => 'BuyController@getBuyBasicData']);
        
    });
});

 