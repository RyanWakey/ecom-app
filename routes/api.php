<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Product Routes

// Fetch all products
Route::get('/products', [ProductController::class, 'index']);

// Fetch a single product
Route::get('/products/{product}', [ProductController::class, 'show']);

// Create a new product (protected route)
Route::post('/products', [ProductController::class, 'store'])->middleware('auth:sanctum');

// Update a product (protected route)
Route::put('/products/{product}', [ProductController::class, 'update'])->middleware('auth:sanctum');

// Delete a product (protected route)
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('auth:sanctum');


// Category Routes