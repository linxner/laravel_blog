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
    header('Access-Control-Allow-Origin:*'); //信任所有域名
    return view('welcome');
});
Route::get('/login', 'LoginController@Test');
Route::any('/input', 'LoginController@Test1');
Route::any('/test', 'LoginController@Test2');
