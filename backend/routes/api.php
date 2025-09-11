<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Публични (без токен)
Route::post('/auth/signup', [AuthController::class, 'signup']);
Route::post('/auth/login', [AuthController::class, 'login']);

// Защитени (изискват Authorization: Bearer <token>)
Route::middleware('jwt')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
});
