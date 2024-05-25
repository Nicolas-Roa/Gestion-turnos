<?php

namespace App\Http\Controllers;

use App\Models\Turnos;
use Illuminate\Http\Request;
use App\Models\Tipo;

class TurnosController extends Controller
{
    /**
     * Autor:Nicolas Roa
     * Fecha:2024-05-25
     * Descripcion: Mostrar el turno y su caja correspondiente
     */
    public function Turnos()
    {
        $turnos = Turnos::whereNotNull('caja')->where('estado', '=', 1)->orderBy('numero', 'desc')->get();

        return view('turno.turnos', [
            'turnos' => $turnos
        ]);
    }

    /**
     * Autor:Nicolas Roa
     * Fecha:2024-05-25
     * Descripcion: mostrar las opcines de los turno
     */
    public function Seleccion()
    {
        $tipos = Tipo::where('estado', '=', 1)->get();
        return view('turno.opciones', [
            'tipos' => $tipos,
        ]);
    }

    /**
     * Autor:Nicolas Roa
     * Fecha:2024-05-25
     * Descripcion: Generar el turno para la person
     * @param int $tipo Tipo del turno
     */
    public function GenerarTurno($tipo)
    {
        $turnoM = new Turnos();
        $turnoM->tipo = $tipo;
        $turnoM->numero = count(Turnos::whereBetween('created_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])->get()) + 1;
        $turnoM->estado = 1;
        if ($turnoM->save()) {
            return view('turno.view', [
                'turno' => $turnoM,
            ]);
        }
    }
}
