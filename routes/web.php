<?php

use App\Http\Controllers\BackofficeController;
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

// CUSTOMER ROUTES


Route::get('/', [HomeController::class, 'homepage'])->name('homepage'); // Route vers la page d'accueil

Route::get('/product', [ProductController::class, 'index'])->name('product-list'); // Route vers la liste des produits

Route::get('/productprice', [ProductController::class, 'productprice'])->name('product-price');

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/cart', [CartController::class, 'index']);


// BACKOFF

Route::get('/backoffice', [BackofficeController::class, 'index']);

Route::get('/backoffice/{id}/edit', [BackofficeController::class, 'editproducts']);

Route::get('/backoffice/{id}/delete', [BackofficeController::class, 'deleteproducts']);

Route::get('/backoffice/add', [BackofficeController::class, 'addproducts']);
Route::post('/backoffice', [BackofficeController::class, 'create']);



