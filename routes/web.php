<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\HistoryController;

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

// Authentication routes
Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Product routes
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// Checkout routes
Route::get('/checkout', [Checkoutcontroller::class, 'index'])->name('checkout.index');

Route::post('/checkout/{product}', [Checkoutcontroller::class, 'pay'])->name('checkout.pay');

// Order routes
Route::get('/resume/{reference}', [ResumeController::class, 'index'])->name('resume.index');

//History routes
Route::get('/user-history', [HistoryController::class, 'user'])->name('history.user');

Route::get('/admin-history', [HistoryController::class, 'admin'])->name('history.admin');
