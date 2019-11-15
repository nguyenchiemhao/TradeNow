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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('/', function () {
        return view('admins.layout.master');
    });
   include_once 'admin/contacts.php';
   include_once 'admin/users.php';
   include_once 'admin/brands.php';
   include_once 'admin/categories.php';
}); 
