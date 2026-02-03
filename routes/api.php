<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaLegadoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sistema-legado', [SistemaLegadoController::class, 'listar']);
Route::get('/sistema-legado/{id}', [SistemaLegadoController::class, 'buscar']);

Route::post('/sistema-legado', [SistemaLegadoController::class, 'cadastrar']);

Route::put('/sistema-legado/{id}', [SistemaLegadoController::class, 'atualizar']);

Route::delete('/sistema-legado/{id}', [SistemaLegadoController::class, 'remover']);
