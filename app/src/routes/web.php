<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('accounts/index', [AccountController::class, 'index']);
Route::get('accounts/login', [AccountController::class, 'login']);
Route::get('accounts/scores', [AccountController::class, 'scores']);
Route::get('accounts/login/{error_id?}', [AccountController::class, 'login']);
Route::get('/{error_id?}', [AccountController::class, 'login']);
Route::post('dologin', [AccountController::class, 'dologin']);
Route::post('logout', [AccountController::class, 'logout']);
Route::post('scores', [AccountController::class, 'scores']);
Route::post('index', [AccountController::class, 'index']);
