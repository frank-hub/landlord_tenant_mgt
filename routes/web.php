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

Route::get('/', function () {
    return view('layouts.login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard/index', function () {
        return view('dashboard/index');
    });

   Route::group(['prefix' => 'tenants'], function () {
    Route::get('create', 'Tenants\TenantsController@create');
    Route::get('assign', 'Tenants\TenantsController@assign');
    Route::get('all', 'Tenants\TenantsController@index');
   });


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
