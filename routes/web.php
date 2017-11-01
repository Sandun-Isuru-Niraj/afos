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


Route::get('log', [

    'uses' => 'RouteController@getWelcome',
    'as' => 'welcome'
]);

Route::get('/', function (){

    return view('login');
});

Route::get('regpage', [

    'uses' => 'RouteController@getRegister',
    'as' => 'getregister'
]);

Route::post('reg',[
    'uses' => 'UserController@RegisterUser',
    'as' => 'registeruser'
]);

Route::post('log', [
    'uses' => 'UserController@Login',
    'as' => 'login'
]);

Route::get('logout',[
    'uses' => 'UserController@logout',
    'as'   => 'logout'
]);

Route::get('select', function (){
    return view('select');
});

Route::post('send',[
    'uses' => 'OrderController@sendOrder',
    'as' => 'sendOrder'
]);

Route::get('select', [

    'uses' => 'RouteController@getSelect',
    'as' => 'select'
]);

Route::get('admin', [
    'uses' => 'RouteController@getAdmin',
    'as' => 'admin'
]);

Route::post('adminlogin', [
    'uses' => 'UserController@AdminLogin',
    'as' => 'adminlogin'
]);

Route::get('admindash', [
    'uses' => 'RouteController@getAdminDashboard',
    'as' => 'admindash'
]);

Route::get('orders', [
    'uses' => 'RouteController@showOrders',
    'as' => 'orders'
]);

Route::get('account', [
    'uses' => 'RouteController@showAccount',
    'as' => 'account'
]);

Route::get('error', function (){
    return view('404');
});

Route::get('error', [
    'uses' => 'RouteController@getError',
    'as' => 'error'
]);

Route::get('payment', [
    'uses' => 'RouteController@getpayment',
    'as' => 'payment'
]);

Route::get('paymentdata',[
    'uses' => 'RouteController@getpaymentdata',
    'as' => 'paymentdata'
]);