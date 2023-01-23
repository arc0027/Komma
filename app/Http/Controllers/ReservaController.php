<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Menus;
use App\Models\Mesas;
use App\Models\Horarios;
use App\Models\Reservas;
use App\Models\Invitados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reserva1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            //'email' => 'required|email|exists:users|confirmed',
            'name' => 'required|min:2|max:30',
            'phone' => 'required|min:10|numeric',
            'person' => 'required|numeric|between:4,8',
        ]);
        Session::flash("mensaje", "Su reserva se ha registrado correctamente");
        return view("reserva3");
    }

    /**
     * Devuelve una respuesta JSON de todas las fechas que están disponibles para reservar
     */
    public function eventoFechas()
    {
        $fecha = Horarios::select("fecha")
            ->where("estados", "Disponible")
            ->groupBy("fecha")
            ->get();

        $datos = array();

        foreach ($fecha as $f) {
            $datos[] = array(
                "id" => $f["id"],
                "title" => "   ",
                "start" => $f["fecha"],
                "end" => $f["fecha"]
            );
        }
        return response()->json($datos);
    }

    /**
     * Devuelve una respuesta json de las horas disponibles para una fecha dada
     * 
     * @param request El objeto de la solicitud.
     */
    public function eventoHoras(Request $request)
    {
        switch ($request->type) {
            case "mostrarHoras":

                $horario = Horarios::where([
                    ["fecha", "=", $request->get("fecha")],
                    ["estados", "=", "Disponible"]
                ])->get();

                $horas = array();

                foreach ($horario as $h) {
                    $horas[] = array(
                        "id" => $h["id"],
                        "hora" => date("H:i", strtotime($h["hora"])),
                    );
                }
                return response()->json($horas);
        }
    }

    /**
     * Obtiene los datos del formulario y luego los pasa a la vista
     * 
     * @param request El objeto de la solicitud.
     * 
     * @return Una vista con los datos de la solicitud.
     */
    public function datos(Request $request)
    {
        $hora = $request->get('hora');
        $fecha = $request->get('fecha');
        $menus = Menus::get(['name']);
        return view("reserva2")->with(['hora' => $hora, 'fecha' => $fecha, 'menus' => $menus]);
    }

    /**
     * Toma los datos del formulario, busca el menú y la mesa, y graba la reserva
     * 
     * @param request El objeto de la solicitud.
     * 
     * @return la vista "reservaFinalizada"
     */
    public function reserva(Request $request)
    {
        $person = $request->input('person');
        $email = $request->input('email');
        $menus = $request->input('menus');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $fecha = $request->input('fecha');
        $horas = $request->input('hora');
        $tarjeta = $request->input('tarjeta');
        $horario = Horarios::where('fecha', $fecha)
            ->where('hora', $horas)
            ->first();
        $idHorario = $horario->id;
        $menu = Menus::where('name', $menus)
            ->first();
        $idMenu = $menu->id;
        $mesas = Mesas::where('asientos', $person)
            ->inRandomOrder()
            ->first();

        if (Auth::check()) {
            $usuario = User::find(Auth::id());

            $reserva = new Reservas;
            $reserva->id_users = $usuario->id;
            $reserva->id_menus = $idMenu;
            $reserva->id_mesas = $mesas->id;
            $reserva->fecha_reservas = $idHorario;
            $reserva->numero_tarjetas = $tarjeta;
            $reserva->numero_personas =  $person;
            $reserva->save();
            Horarios::where('id', $idHorario)->update(['estados' => 'No Disponible']);
            
            Session::flash("mensaje", "Su reserva se ha registrado correctamente");
            return redirect("misReservas");
        } else {
            $invitado = new Invitados();
            $invitado->email = $email;
            $invitado->name = $name;
            $invitado->phone = $phone;
            $invitado->save();
            $usuario = $invitado;

            $reserva = new Reservas;
            $reserva->id_invitados = $usuario->id;
            $reserva->id_menus = $idMenu;
            $reserva->id_mesas = $mesas->id;
            $reserva->fecha_reservas = $idHorario;
            $reserva->numero_tarjetas = $tarjeta;
            $reserva->numero_personas =  $person;
            $reserva->save();
            Horarios::where('id', $idHorario)->update(['estados' => 'No Disponible']);

            Session::flash("mensaje", "Su reserva se ha registrado correctamente");
            return view("reservaFinalizada");
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showReservas()
    {
        $reservas = Reservas::with('users')
            ->where('id_users', Auth::id())
            ->get();
        return view("misReservas")->with(['reservas' => $reservas]);
    }

    public function cancelarReserva($id_reserva, $id_horario)
    {
        $reserva = Reservas::find($id_reserva);
        $reserva->delete();
        DB::update('update horarios set estados = "Disponible" where id = ' . $id_horario);
        Session::flash("mensaje", "Su reserva se ha cancelado correctamente");
        return redirect("misReservas");
    }

    public function realizarReservas()
    {
        return redirect("/reserva1");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
