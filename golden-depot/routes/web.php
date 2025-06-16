<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\CartController;

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
Route::put('/cart/update', [CartController::class, 'update'])->name('cart.update');