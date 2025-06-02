<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RouteController;

Route::apiResource('routes', RouteController::class);
Route::get('/routes', [RouteController::class, 'index']);
Route::post('/routes', [RouteController::class, 'store']);
Route::get('/routes/{id}', [RouteController::class, 'show']);
Route::put('/routes/{id}', [RouteController::class, 'update']);
Route::delete('/routes/{id}', [RouteController::class, 'destroy']);


