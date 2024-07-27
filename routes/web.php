<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/first-route', function () {
    return ['first' => 'first-route'];
});

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index']);

Route::get('/profile/detail/{id}', [\App\Http\Controllers\ProfileController::class, 'detail']);

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);
