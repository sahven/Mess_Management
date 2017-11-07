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
    return view('/caterer/home');
});

// Subscriptions

Route::get('/caterer/subscriptions/subscriptions','SubscriptionController@index');

Route::get('/caterer/subscriptions/view','SubscriptionController@view');

Route::get('/caterer/subscriptions/add','SubscriptionController@add');

Route::get('/caterer/subscriptions/delete','SubscriptionController@delete');

Route::get('/caterer/subscriptions/verify','SubscriptionController@verify');

Route::post('/caterer/subscriptions/add','SubscriptionController@submit');

Route::post('/caterer/subscriptions/delete','SubscriptionController@delete_subscriber');

Route::post('/caterer/subscriptions/verify','SubscriptionController@verify_subscriber');

Route::get('/caterer/subscriptions/verifyresult','SubscriptionController@verifyresult');

// Pricing

Route::get('/caterer/pricing/pricing','PricingController@index');
