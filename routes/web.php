<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/orders',
    [\App\Http\Controllers\OrderController::class, 'index']
)->name('orders.index');

Route::get(
    '/orders/create',
    [\App\Http\Controllers\OrderController::class, 'create']
)->name('orders.create');

Route::post(
    '/orders',
    [\App\Http\Controllers\OrderController::class, 'store']
)->name('orders.store');

Route::get(
    '/orders/{order}',
    [\App\Http\Controllers\OrderController::class, 'show']
)->name('orders.show');

Route::get(
    '/orders/{order}/edit',
    [\App\Http\Controllers\OrderController::class, 'edit']
)->name('orders.edit');

Route::put(
    '/orders/{order}',
    [\App\Http\Controllers\OrderController::class, 'update']
)->name('orders.update');

Route::delete(
    '/orders/{order}',
    [\App\Http\Controllers\OrderController::class, 'destroy']
)->name('orders.destroy');
