<?php

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
    Route::get('/users', [userController::class, 'index']);
    Route::get('/user/{user}', [userController::class, 'show']);
    // Route::get('/verify-auth', [userController::class, 'verifyAuth']);
});

//private routes
Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    // Route::apiResource('user', UserController::class);
    Route::get('/verify-auth', [userController::class, 'verifyAuth']);
});
