<?php

use Illuminate\Support\Facades\Route;
use Smartttech\Blog\Controllers\BlogController;

Route::prefix('api/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::post('/', [BlogController::class, 'store']);
    Route::get('/{id}', [BlogController::class, 'show']);
    Route::post('update/{id}', [BlogController::class, 'update']);
    Route::delete('/{id}', [BlogController::class, 'destroy']);
});
