@extends('layouts.medac')

@section('titulo')
    <h1>
        MIS RESERVAS</h1>
@endsection

@section('indice')
    <h2>Inicio > Perfil > Mis reservas</h2>
@endsection

@section('header')
    <header class="perfil">
    @endsection

    @section('contenido')
        <div class="flex justify-center">
            @if (Session::has('mensaje'))
                <div id="msj" class="alert alert-success w-2/4" role="alert">
                    {{ Session::get('mensaje') }}
                </div>
            @endif
        </div>
        <div class="container-fluid">
            <div class="recuadro">
                <h3>Bienvenido @if (Auth::user() != null)
                        {{ auth()->user()->name }}
                    @endif
                </h3>
                <h4>Lista de reserva</h4>
                <div id="lista">
                    <div class="text-center">
                        <table class="text-7xl">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Menu</th>
                                    <th>Mesa</th>
                                    <th>Personas</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($reservas)
                                    @foreach ($reservas as $r)
                                        <tr>
                                            <td>{{ $r->id_reservas }}</td>
                                            <td>{{ $r->horarios->fecha }}</td>
                                            <td>{{ $r->horarios->fecha }}</td>
                                            <td>{{ $r->menus->name }}</td>
                                            <td>{{ $r->id_mesas }}</td>
                                            <td>{{ $r->numero_personas }}</td>
                                            <td><a class="botonFormulario text-base" href="/cancelarReserva/{{$r->id_reservas}}/{{$r->horarios->id}}">Cancelar</a></td>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center mb-10">
                <form method="GET" action="/realizarReservas">
                    @csrf
                    <input type="submit" class="botonFormulario" value="Realizar reserva">
                </form>
            </div>
        </div>
    @endsection
