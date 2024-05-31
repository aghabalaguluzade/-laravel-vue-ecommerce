<?php

use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'admin'])->group(function() {
    Route::get('/user', [AuthController::class, 'getUser']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('products', 'ProductController');
});

Route::post('/login', [AuthController::class, 'login']);