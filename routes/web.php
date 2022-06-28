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

Route::match(['get', 'post'], '/', 'MainController@home')->name('home');
Route::match(['get', 'post'], '/beli-voucher', 'MainController@voucher')->name('voucher');
Route::match(['get', 'post'], '/beli-voucher/callback', 'MainController@CallBackPayment')->name('callback');
