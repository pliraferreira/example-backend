<?php

use App\Http\Controllers\CarroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->controller(CarroController::class)->group(function () {
    Route::get('/carro', 'index');
    Route::get('/carro/{id}', 'show');
    Route::post('/carro', 'store');
    Route::put('/carro/{id}', 'update');
    Route::delete('/carro/{id}', 'destroy');
});

require __DIR__.'/auth.php';
