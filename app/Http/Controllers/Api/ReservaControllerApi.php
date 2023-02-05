<?php

namespace App\Http\Controllers\Api;

use App\Reserva;
use App\Models\Horarios;
use App\Models\Reservas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservaControllerApi extends Controller
{
    public function consultarReservas()
    {
        $reservas = Reservas::all();
        return response()->json($reservas);
    }
    
    public function consultarHorarios()
    {
        $horarios = Horarios::all();
        return response()->json($horarios);
    }

    public function insertarReserva(Request $request)
    {
        $reserva = new Reservas();
        $reserva->fill($request->all());
        $reserva->save();
        return response()->json($reserva);
    }

    public function actualizarReserva(Request $request, $id)
    {
        $reserva = Reservas::findOrFail($id);
        $reserva->fill($request->all());
        $reserva->save();
        return response()->json($reserva);
    }

    public function borrarReserva($id)
    {
        $reserva = Reservas::findOrFail($id);
        $reserva->delete();
        return response()->json(['mensaje' => 'Reserva eliminada']);
    }
}
