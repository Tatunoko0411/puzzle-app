<?php

use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;

Route::prefix('accounts')->name('accounts.')->controller(AccountController::class)
    ->middleware(AuthMiddleware::class)->group(function () {
        Route::get('index{name?}', 'index')->name('index');
        Route::get('scores', 'scores')->name('scores');
        Route::post('index{name?}', 'index')->name('index');
        Route::post('scores', 'scores')->name('result');
        Route::get('userDate{id?}', 'userDate')->name('userDate');

    });

Route::prefix('accounts')->name('accounts.')->controller(AuthController::class)
    ->middleware(AuthMiddleware::class)->group(function () {
        Route::get('index{name?}', 'index')->name('index');
        Route::get('scores', 'scores')->name('scores');
        Route::post('index{name?}', 'index')->name('index');
        Route::post('scores', 'scores')->name('result');
        Route::get('userDate{id?}', 'userDate')->name('userDate');

    });

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout']);
Route::post('items', [AuthController::class, 'items']);
Route::get('items', [AuthController::class, 'items']);
Route::post('userItems{name?}', [AuthController::class, 'userItems']);

Route::post('items/update/index{id?}', [ItemController::class, 'updateIndex']);
Route::post('items/update/store', [ItemController::class, 'updateStore']);;
Route::post('items/delete{id?}', [ItemController::class, 'delete']);
Route::get('items/delete/result', [ItemController::class, 'deleteResult'])->name('items.delete.result');
Route::get('items/update/result', [ItemController::class, 'updateResult'])->name('items.update.result');
Route::post('items/delete/check', [ItemController::class, 'checkDelete']);

Route::prefix('items')->name('items.')->controller(ItemController::class)
    ->middleware(AuthMiddleware::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('result', 'result')->name('result');
        Route::post('store', 'store')->name('store');
        Route::post('create', 'index')->name('create');
    });

Route::get('/{error_id?}', [AuthController::class, 'index']);
