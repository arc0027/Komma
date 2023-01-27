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
                <h4 id="lista-reservas">Lista de reservas</h4>
                <div id="lista">
                    <div class="text-center">
                        <table id="tabla-misreservas" class="table">
                            @if (count($reservas) > 0)
                                <thead id="encabezado-tabla" class="thead-dark text-7xl">
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Menu</th>
                                        <th>Personas</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="contenido-tabla" class="text-7xl">
                                    @isset($reservas)
                                        @foreach ($reservas as $r)
                                            <tr>
                                                <td>{{ $r->horarios->fecha }}</td>
                                                <td>{{ $r->horarios->hora }}</td>
                                                <td>{{ $r->menus->name }}</td>
                                                <td>{{ $r->numero_personas }}</td>
                                                <td><a id="botonFormulario" class="text-base"
                                                        href="/cancelarReserva/{{ $r->id_reservas }}/{{ $r->horarios->id }}">Cancelar</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            @else
                                <thead id="encabezado-tabla" class="thead-dark text-7xl">
                                    <tr>
                                        <th>No hay reservas registradas</th>
                                    </tr>
                                </thead>
                            @endif

                        </table>
                        <div class="text-center mb-10">
                            <form method="GET" action="/realizarReservas">
                                @csrf
                                <input id="botonFormulario" type="submit" value="Realizar reserva">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
