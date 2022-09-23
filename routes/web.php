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

// CUSTOMER ROUTE


Route::get('/', [HomeController::class, 'homepage'])->name('homepage'); // Route vers la page d'accueil

Route::get('/product', [ProductController::class, 'index'])->name('product-list'); // Route vers la liste des produits

Route::get('/product/{id}', [ProductController::class, 'show']); // Route vers la page d'un produit

Route::get('/cart', [CartController::class, 'index']); // Route vers le panier


// BACKOFFICE ROUTES

Route::get('/backoffice', [BackofficeController::class, 'index'])->name('backoffice');

Route::delete('/backoffice/{id}', [BackofficeController::class, 'destroy'])->name('backoffice-delete');


Route::get('/backoffice/add', [BackofficeController::class, 'create'])->name('backoffice-add');
Route::post('/backoffice', [BackofficeController::class, 'store'])->name('backoffice-store');


Route::get('/backoffice/{id}/edit', [BackofficeController::class, 'edit'])->name('backoffice-edit');
Route::put('/backoffice/{id}', [BackofficeController::class, 'update'])->name('backoffice-update');

Route::get('/backoffice/order', [\App\Http\Controllers\Ordercontroller::class, 'index'])->name('order-list');

Route::get('/backoffice/category', [\App\Http\Controllers\Categorycontroller::class, 'index'])->name('category-list');



