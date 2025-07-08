<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\StageCellController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('users/index',
    [UserController::class, 'index'])
    ->name('users.index');

Route::get('users/{user_id}',
    [UserController::class, 'show'])
    ->name('users.show');


Route::get('stages/index',
    [StageController::class, 'index'])
    ->name('users.index');


Route::get('stages/{stage_id}',
    [StageController::class, 'show'])
    ->name('users.show');

Route::get('stageCells/index',
    [StageCellController::class, 'index'])
    ->name('users.index');


Route::get('stageCells/{stage_id}',
    [StageCellController::class, 'show'])
    ->name('users.show');

Route::get('items/index',
    [ItemController::class, 'index'])
    ->name('items.index');

Route::get('items/{item_id}',
    [ItemController::class, 'show'])
    ->name('items.show');
