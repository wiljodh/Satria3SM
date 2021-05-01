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

//PAGE ROUTE 

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('nilainilaiperusahaan', 'App\Http\Controllers\PagesController@nilainilaiperusahaan');
Route::get('tentang3sm', 'App\Http\Controllers\PagesController@tentang3sm');
Route::get('visimisi', 'App\Http\Controllers\PagesController@visimisi');

//END OF PAGE ROUTE