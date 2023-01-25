@extends('layouts.medac')

@section('titulo')
    <h1>RESERVA</h1>
@endsection

@section('indice')
    <h2>Inicio > Reserva</h2>
@endsection

@section('header')
    <header class="reservas">
    @endsection

    @section('contenido')
        <div class="flex justify-center mb-11">
            @if (Session::has('mensaje'))
                <div id="msj" class="alert alert-success w-2/4" role="alert">
                    {{ Session::get('mensaje') }}
                </div>
            @endif
        </div>
    @endsection
