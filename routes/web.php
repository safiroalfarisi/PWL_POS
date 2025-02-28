<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', [HomeController::class, 'index']);
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
});
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);
Route::get('/sales', [SalesController::class, 'index']);
