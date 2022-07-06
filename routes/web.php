<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


///AUTHENTICATION
Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [AuthController::class, 'auth']);
Route::post('/logout', [AuthController::class, 'logout']);

///REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;
Route::post('/register', [RegisterController::class, 'create']);

///DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

///PRODUCT
Route::resource('/product', ProductController::class)->middleware('auth');
