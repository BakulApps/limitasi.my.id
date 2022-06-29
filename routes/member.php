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

Route::match(['get', 'post'], '/masuk', 'AuthController@login')->name('member.login');
Route::match(['get', 'post'], '/daftar', 'AuthController@register')->name('member.register');
Route::group(['middleware' => 'auth.member'], function (){
    Route::match(['get', 'post'], '/', 'MainController@home')->name('member.home');
    Route::match(['get', 'post'], '/keluar', 'AuthController@logout')->name('member.logout');
});

