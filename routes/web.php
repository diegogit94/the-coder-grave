<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RetryController;

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

// Home Route
Route::get('/', [ProductController::class, 'index']);

// Product routes
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// Checkout routes
Route::get('/checkout', [Checkoutcontroller::class, 'index'])->name('checkout.index')->middleware('auth');

Route::post('/checkout/{product}', [Checkoutcontroller::class, 'pay'])->name('checkout.pay')->middleware('auth');

// Resume routes
Route::get('/resume/{reference}', [ResumeController::class, 'index'])->name('resume.index')->middleware('auth');

//History routes
Route::get('/user-history', [HistoryController::class, 'user'])->name('history.user')->middleware('auth');

Route::get('/admin-history', [HistoryController::class, 'admin'])->name('history.admin')->middleware('auth', 'admin');

// Retry payemnt route
Route::post('/retry/{order}', [RetryController::class, 'retry'])->name('retry.pay')->middleware('auth');
