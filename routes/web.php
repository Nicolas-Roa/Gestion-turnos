<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnosController;
use App\Http\Controllers\CajasController;

Route::get('/', [TurnosController::class, 'Turnos']);

Route::get('/turno', [TurnosController::class, 'Seleccion']);

Route::get('/turno/{tipo}', [TurnosController::class, 'GenerarTurno']);

Route::get('/cajas', [CajasController::class, 'Cajas']);

Route::get('/caja/{caja}', [CajasController::class, 'AsignarTurno']);

Route::get('/caja/tomar/{caja}/{turno}', [CajasController::class, 'TomarTurno']);
Route::get('/caja/atendido/{caja}/{turno}', [CajasController::class, 'ActualizarTurno']);
