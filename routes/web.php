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
    return view('welcome');
});
Route::get('kader/dashboard','KaderController@index');
Route::get('superadmin/dashboard','SuperadminController@index');
Route::get('loginsuperadmin','LoginController@loginsuperadmin');
Route::get('loginadminpuskesmas','LoginController@loginadminpuskesmas');
Route::get('loginkader','LoginController@loginkader');
Route::get('loginbidan','LoginController@loginbidan');