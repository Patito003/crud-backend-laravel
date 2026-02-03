<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaLegadoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sistemas', [SistemaLegadoController::class, 'listar']);
Route::get('/sistemas/{id}', [SistemaLegadoController::class, 'buscar']);

Route::post('/sistemas', [SistemaLegadoController::class, 'cadastrar']);

Route::put('/sistemas/{id}', [SistemaLegadoController::class, 'atualizar']);

Route::delete('/sistemas/{id}', [SistemaLegadoController::class, 'remover']);