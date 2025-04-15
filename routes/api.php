<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\LogoutController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes cho xác thực
Route::match(['post', 'get'], 'login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

// Route logout mới sử dụng LogoutController
Route::post('logout', [LogoutController::class, 'logout']);
Route::get('logout/{token}', [LogoutController::class, 'logoutWithToken']);

// Các routes cụ thể đặt trước
Route::get('products/featured', [ProductController::class, 'getFeatured']);
Route::get('products/category/{category}', [ProductController::class, 'getByCategory']);
Route::get('products/search/{keyword}', [ProductController::class, 'search']);

// Route resource đặt sau
Route::apiResource('products', ProductController::class);