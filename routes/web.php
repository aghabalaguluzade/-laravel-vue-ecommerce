<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
// Product
Route::get('/product/{product:slug}', [ProductController::class, 'view'])->name('product.view');
// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product:slug}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/get-total-count', [CartController::class, 'getTotalCount'])->name('cart.total-count');
Route::post('/cart/remove/{product:slug}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update-quantity/{product:slug}', [CartController::class, 'updateQuantity'])->name('cart.update-quantity');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
