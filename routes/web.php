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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'frontend\HomeController@home');
Route::get('/cart', 'frontend\HomeController@cart');
Route::get('/shop', 'frontend\HomeController@shop');
Route::get('/checkout', 'frontend\HomeController@checkout');

Route::get('/login', 'frontend\HomeController@login');
Route::get('/signup', 'frontend\HomeController@signup');

