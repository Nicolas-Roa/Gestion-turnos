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
     * Descripcion: mostrar las opcines de los turno
     */
    public function index()
    {
        $tipos = Tipo::where('estado', '=', 1)->get();
        return view('turno.opciones', [
            'tipos' => $tipos,
        ]);
    }

    /**
     * Autor:Nicolas Roa
     * Fecha:2024-05-25
     * Descripcion: Generar el turno para la persona
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Turnos $turnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Turnos $turnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Turnos $turnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Turnos $turnos)
    {
        //
    }
}
