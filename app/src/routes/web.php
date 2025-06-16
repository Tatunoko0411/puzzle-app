<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;

Route::get('accounts/index', [AccountController::class, 'index']);
Route::get('accounts/login', [AccountController::class, 'login']);
Route::get('accounts/scores', [AccountController::class, 'scores']);
Route::get('accounts/login/{error_id?}', [AccountController::class, 'login']);
Route::get('/{error_id?}', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('scores', [AccountController::class, 'scores']);
Route::post('index{name?}', [AccountController::class, 'index']);
Route::post('items', [AuthController::class, 'items']);
Route::post('userItems{name?}', [AuthController::class, 'userItems']);
