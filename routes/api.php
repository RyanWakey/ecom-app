<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\BrowsingHistoryController;
use App\Http\Controllers\DealController;


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
Route::get('/categories', [CategoryController::class, 'index']);
// Fetch a single category 
Route::get('/categories/{category}', [CategoryController::class, 'show']);
// Create a new category 
Route::post('/categories', [CategoryController::class, 'store'])->middleware('auth:sanctum');
// Update a category 
Route::put('/categories/{category}', [CategoryController::class, 'update'])->middleware('auth:sanctum');
// Delete a category 
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->middleware('auth:sanctum');


// Order Routes

// Fetch all orders
Route::get('/orders', [OrderController::class, 'index']);
// Fetch a single order
Route::get('/orders/{order}', [OrderController::class, 'show']);
// Create a new order
Route::post('/orders', [OrderController::class, 'store'])->middleware('auth:sanctum');
// Update an order
Route::put('/orders/{order}', [OrderController::class, 'update'])->middleware('auth:sanctum');
// Delete an order
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->middleware('auth:sanctum');


// CartItem Routes

// Fetch all cart items
Route::get('/cartItems', [CartItemController::class, 'index']);
// Fetch a single cart item
Route::get('/cartItems/{cartItem}', [CartItemController::class, 'show']);
// Create a new cart item
Route::post('/cartItems', [CartItemController::class, 'store'])->middleware('auth:sanctum');
// Update a cart item
Route::put('/cartItems/{cartItem}', [CartItemController::class, 'update'])->middleware('auth:sanctum');
// Delete a cart item
Route::delete('/cartItems/{cartItem}', [CartItemController::class, 'destroy'])->middleware('auth:sanctum');

// Authentication Routes

Route::post('register', [AuthController::class, 'apiRegister']);
Route::post('login', [AuthController::class, 'apiLogin']);
Route::post('logout', [AuthController::class, 'apiLogout'])->middleware('auth:sanctum');
Route::get('user', [AuthController::class, 'user'])->middleware('auth:sanctum');



// Routes that require user authentication for their browsing history and
// both global and user-specific deals and recommended products

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/browsing-history', [BrowsingHistoryController::class, 'index']);
    Route::get('/deals', [DealController::class, 'userDeals']);
    Route::get('/recommended-products', [RecommendedProductsController::class, 'index']);
});

// Route to get popular categories, available to all users
Route::get('/popular-categories', [CategoryController::class, 'index']);
// Route to get today's deals
Route::get('/today-deals', [DealController::class, 'todayDeals']);
// Route to get Garden-essentials Sub Categories
Route::get('/garden-essentials-subcategories', [CategoryController::class, 'getGardenEssentialsSubcategories']);
