<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartItemController;

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

// Fetch all categories
Route::get('/categories', [CategoryController::class], 'index');

// Fetch a single category 
Route::get('/categories', [CategoryController::class], 'show');

// Create a new category 
Route::post('/categories', [CategoryController::class], 'store')->middleware('auth:sanctum');

// Update a category 
Route::put('/categories/{category}', [CategoryController::class], 'update')->middleware('auth:sanctum');

// Delete a category 
Route::delete('/categories/{category}', [CategoryController::class], 'destroy')->middleware('auth:sanctum');




// Order Routes

// Fetch all orders
Route::get('/orders', [OrderController::class], 'index');

// Fetch a single category 
Route::get('/orders', [OrderController::class], 'show');

// Create a new category 
Route::post('/orders', [OrderController::class], 'store')->middleware('auth:sanctum');

// Update a category 
Route::put('/orders/{order}', [OrderController::class], 'update')->middleware('auth:sanctum');

// Delete a category 
Route::delete('/orders/{order}', [OrderController::class], 'destroy')->middleware('auth:sanctum');



// CartItem Routes

Route::get('/cartItems', [CartItemController::class], 'index');

// Fetch a single category 
Route::get('/cartItems', [CartItemController::class], 'show');

// Create a new category 
Route::post('/cartItems', [CartItemController::class], 'store')->middleware('auth:sanctum');

// Update a category 
Route::put('/cartItems/{cartItem}', [CartItemController::class], 'update')->middleware('auth:sanctum');

// Delete a category 
Route::delete('/cartItems/{cartItem}', [CartItemController::class], 'destroy')->middleware('auth:sanctum');
