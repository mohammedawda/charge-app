<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/

Route::get('login', 'AdminController@login')->name('admin.login');
Route::group(['middleware' => 'admin'], function(){

    Route::get('/admins', function(){
        return 'hello';
    })->name('index.admins');
    // Route::get('/admins', 'AdminController@index')->name('index.admins');
});