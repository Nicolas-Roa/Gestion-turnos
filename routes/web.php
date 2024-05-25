<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnosController;

Route::get('/', [TurnosController::class, 'index']);

Route::get('/turno/{tipo}', [TurnosController::class, 'GenerarTurno']);
