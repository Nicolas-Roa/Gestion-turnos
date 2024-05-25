<?php

namespace App\Http\Controllers;

use App\Models\Cajas;
use Illuminate\Http\Request;
use App\Models\Turnos;

class CajasController extends Controller
{
    public function AsignarTurno($caja)
    {
        $turno = Turnos::where('caja', '=', $caja)->where('estado', '=', 1)->get();

        if (count($turno) > 0) {
            return redirect("/caja/tomar/{$caja}/{$turno[0]->id}");
        }

        $turnos = Turnos::whereNull('caja')->get();

        return view('cajas.asignar', [
            'turnos' => $turnos,
            'caja' => $caja
        ]);
    }

    public function TomarTurno($caja, $turno)
    {
        $turno = Turnos::find($turno);
        $turno->caja = $caja;
        if ($turno->save()) {
            return view('cajas.gestion', [
                'caja' => $caja,
                'turno' => $turno,
            ]);
        }
    }

    public function Cajas()
    {
        $cajasM = Cajas::where('estado', '=', 1)->get();
        return view('cajas.view', [
            'cajas' => $cajasM,
        ]);
    }

    public function ActualizarTurno($caja, $turno)
    {
        $turno = Turnos::find($turno);
        $turno->estado = 2;
        if ($turno->save()) {
            return redirect('/caja/' . $caja);
        }
    }
}
