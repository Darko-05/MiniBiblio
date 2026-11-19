<?php

use App\Http\Controllers\LivreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [LivreController::class, 'index']);
Route::post('/products', [LivreController::class, 'store']);
Route::post('/products', [LivreController::class, 'update']);
Route::delete('/products', [LivreController::class, 'destroy']);
