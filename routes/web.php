<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('buy/{product_id}', [HomeController::class, 'buy'])->name('buy');
Route::post('confirm', [HomeController::class, 'confirm'])->name('confirm');
Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('pay', [HomeController::class, 'pay'])->name('pay');
Route::view('success', 'success')->name('success');

Route::stripeWebhooks('webhook');
