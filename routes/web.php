<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'insert']);
Route::get('/products/{id}', [ProductController::class, 'showProduct']);
Route::get('/products/{id}/edit', [ProductController::class, 'editProduct']);
Route::put('/products/{id}', [ProductController::class, 'updateProduct']);
Route::delete('/products/{id}', [ProductController::class, 'deleteProduct']);
