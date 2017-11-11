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

// Caterer routes

Route::get('/', function () {
    return view('/welcome');
});

Route::get('/caterer/home', function () {
    return view('/caterer/home');
});

// Caterer_Subscriptions

Route::get('/caterer/subscriptions/subscriptions','SubscriptionController@index');

Route::get('/caterer/subscriptions/view','SubscriptionController@view');

Route::get('/caterer/subscriptions/add','SubscriptionController@add');

Route::get('/caterer/subscriptions/delete','SubscriptionController@delete');

Route::get('/caterer/subscriptions/verify','SubscriptionController@verify');

Route::post('/caterer/subscriptions/add','SubscriptionController@submit');

Route::post('/caterer/subscriptions/delete','SubscriptionController@delete_subscriber');

Route::post('/caterer/subscriptions/verify','SubscriptionController@verify_subscriber');

Route::get('/caterer/subscriptions/verifyresult','SubscriptionController@verifyresult');

// Caterer_Pricing

Route::get('/caterer/pricing/pricing','PricingController@index');

Route::get('/caterer/pricing/view','PricingController@view');

Route::get('/caterer/pricing/change','PricingController@change');

Route::post('/caterer/pricing/view','PricingController@viewresult');

Route::get('/caterer/pricing/viewresult','PricingController@viewresult');

Route::post('/caterer/pricing/change','PricingController@update');


// Caterer_Transaction
// Yet to implement transaction table.

Route::get('/caterer/transaction/transaction',function(){

	return view('/caterer/transaction/transaction');
});

// Caterer_Menu

Route::get('/caterer/menu/menu','MenuController@index');

Route::get('/caterer/menu/view','MenuController@view');

Route::get('/caterer/menu/change','MenuController@change');

// User

Route::get('/user/home',function(){

	return view('/user/home');

});