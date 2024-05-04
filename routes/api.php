<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//public routes
Route::prefix('v1')->group(function () {
    //authentication route
    Route::get('/verify-auth', [AuthController::class, 'verifyAuth']);
    Route::get('/verify-phone', [AuthController::class, 'verifyPhone']);
    Route::get('/verify-email', [AuthController::class, 'verifyEmail']);
    Route::get('/verify-username', [AuthController::class, 'verifyUsername']);
});

//private routes
Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    Route::get('/auth-user', [UserController::class, 'showAuthUser']);
    Route::apiResource('user', UserController::class);
});
