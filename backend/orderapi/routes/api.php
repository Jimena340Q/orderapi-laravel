<?php

use App\Http\Controllers\CausalController;
use App\Http\Controllers\ObservationController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\TypeActivityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('causal' , CausalController::class);
Route::apiResource('observation' , ObservationController::class);
Route::apiResource('type_activity' , TypeActivityController::class);
Route::apiResource('technician' , TechnicianController::class);