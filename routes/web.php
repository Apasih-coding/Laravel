<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/downloadPDF', [ProductController::class, 'downloadPDF'])->name('downloadPDF');
Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/order/add_order', [OrderController::class, 'store'])->name('add.order');