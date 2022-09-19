<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

//



Route::get('/', [HomeController::class, 'homepage']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/productprice', [ProductController::class, 'productprice']);

Route::get('/productspecial', [ProductController::class, 'productspecial']);

Route::get('/product/{id}', [ProductController::class,'show']);

Route::get('/cart', [CartController::class,'index']);



