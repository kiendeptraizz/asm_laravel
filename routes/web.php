<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

// Trang chủ - Sử dụng HomeController thay vì closure
Route::get('/', [HomeController::class, 'index'])->name('home');

// Sản phẩm - Client routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/featured', [ProductController::class, 'featured'])->name('products.featured');
Route::get('/products/category/{slug}', [ProductController::class, 'category'])->name('products.category');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin routes - Giữ nguyên
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('products', AdminProductController::class)->names('admin.products');
    Route::resource('categories', CategoryController::class)->names('admin.categories');
    Route::resource('users', UserController::class)->names('admin.users');
});