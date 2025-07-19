<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
// use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Api\DataMedisController;
use App\Http\Controllers\Api\LoginController;


Route::middleware('guest')->group(function () {
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth:sanctum')->group(function () {
    // Data Medis
    Route::get('/data-medis', [DataMedisController::class, 'index']);
    Route::post('/data-medis', [DataMedisController::class, 'store']);
    Route::get('/data-medis/{id}', [DataMedisController::class, 'show']);
    Route::put('/data-medis/{id}', [DataMedisController::class, 'update']);
    Route::delete('/data-medis/{id}', [DataMedisController::class, 'destroy']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

