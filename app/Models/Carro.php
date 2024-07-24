<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = ["name", "brand", "color"];
    protected $primaryKey = 'id';

    // Route::controller(CarroController::class)->group(function () {
//     Route::get('/carro', 'index');
//     Route::get('/carro/{id}', 'show');
//     Route::post('/carro', 'store');
//     Route::put('/carro/{id}', 'update');
//     Route::delete('/carro/{id}', 'destroy');
// })->middleware('auth:sanctum');
}
