<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\MantenimientosController;
use App\Http\Controllers\TecnicosController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//CATEGORIAS
Route::prefix('categorias')->group(function () {
    Route::get('con-juegos', [CategoriasController::class, 'conJuegos']);
    Route::get('con-cantidad-juegos', [CategoriasController::class, 'conCantidadJuegos']);
});
Route::apiResource('categorias', CategoriasController::class);

//JUEGOS
Route::prefix('juegos')->group(function () {
    Route::get('con-categoria', [JuegosController::class, 'conCategoria']);
    Route::get('con-cantidad-mantenimientos', [JuegosController::class, 'conCantidadMantenimientos']);
    Route::put('{juego}/cambiar-categoria', [JuegosController::class, 'cambiarCategoria']);
});
Route::apiResource('juegos', JuegosController::class);

//MANTENIMIENTOS
Route::prefix('mantenimientos')->group(function () {
    Route::get('con-tecnico-juego', [MantenimientosController::class, 'conTecnicoJuego']);
    Route::put('{mantenimiento}/cambiar-juego', [MantenimientosController::class, 'cambiarJuego']);
    Route::put('{mantenimiento}/cambiar-tecnico', [MantenimientosController::class, 'cambiarTecnico']);
});
Route::apiResource('mantenimientos', MantenimientosController::class);

//TECNICOS
Route::get('tecnicos/con-cantidad-mantenimientos', [TecnicosController::class, 'conCantidadMantenimientos']);
Route::apiResource('tecnicos', TecnicosController::class);