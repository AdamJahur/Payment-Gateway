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
    return view('login');
});

Route::get('/home', function () {
	return view('home');
});

Route::get('/paymentHistory', function () {
	return view('paymentHistory');
});

Route::get('/searchAcct', function () {
	return view('searchAcct');
});

Route::get('/homeCustomer', function () {
	return view('homeCustomer');
});

Route::get('/customerProfile', function () {
	return view('customerProfile');
});

Route::get('/paymentHistoryCustomer', function () {
	return view('paymentHistoryCustomer');
});

Route::post('/loginme', 'loginController@login');

