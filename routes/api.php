<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EquipoController;

Route::post('/crear', [EquipoController::class, 'store']);
Route::get('/equipos', [EquipoController::class, 'showAll']);
Route::post('/validar-equipos', [EquipoController::class, 'validate']);
