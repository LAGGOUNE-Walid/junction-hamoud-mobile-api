<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::POST("signup", [UserController::class, "create"]);
Route::POST("login", [UserController::class, "login"]);
Route::middleware('auth:sanctum')->group(function () {
    Route::POST("report", [ReportController::class, "create"]);
});


