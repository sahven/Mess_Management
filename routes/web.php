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

// Registration Route

// For Diner

Route::get('/registration/registeruser','RegistrationController@createuser');

Route::post('/registration/registeruser','RegistrationController@storeuser');

// For Caterer

Route::get('/registration/registercaterer','RegistrationController@createcaterer');

Route::post('/registration/registercaterer','RegistrationController@storecaterer');

// Login Route

Route::get('/login','SessionsController@index')->name('login');

Route::post('/login','SessionsController@login');

Route::get('/logout','SessionsController@destroy');

// Caterer routes

Route::get('/', function () {
    return view('/welcome');
});

Route::get('/caterer/home','CatererController@index');

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

Route::get('/caterer/transaction/transaction','TransactionController@index');

Route::get('/caterer/transaction/view','TransactionController@viewcaterer');

Route::get('/caterer/transaction/add','TransactionController@add');

Route::post('/caterer/transaction/add','TransactionController@create');

// Caterer_Menu

Route::get('/caterer/menu/menu','MenuController@index');

Route::get('/caterer/menu/view','MenuController@view');

Route::get('/caterer/menu/modify','MenuController@modify');

Route::get('/caterer/menu/add','MenuController@add');

Route::get('/caterer/menu/delete','MenuController@delete');

Route::post('/caterer/menu/add','MenuController@insert');

Route::post('/caterer/menu/delete','MenuController@remove');


// Caterer_product

Route::get('/caterer/product','ProductController@index');

Route::post('/caterer/product','ProductController@add');


// User

Route::get('/user/home','DinerController@index');

Route::get('/user/profile','DinerController@profile');

Route::get('/user/opinion','OpinionController@viewopinion');

Route::get('/user/subscription','SubscriptionController@usersub');

Route::get('/user/transaction','TransactionController@viewuser');

Route::post('/user/opinion','OpinionController@add');




