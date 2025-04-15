<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LogoutController;

// Route này sẽ xử lý cả GET và POST cho logout
Route::any('api/do-logout', [LogoutController::class, 'logout']);
Route::get('api/do-logout/{token}', [LogoutController::class, 'logoutWithToken']);
