<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bai1;
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

// Route::get('/ok', function () 
//     return view('welcome');
//
Route::get('/','CustomerController@home');
Route::get('/customer/create','CustomerController@create');
Route::get('/customer','CustomerController@list');

Route::post('/add-customer','CustomerController@add_customer');
Route::post('/tim-kiem','CustomerController@search');