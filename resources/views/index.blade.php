@extends('layouts.index')

@section('header')
    <header class="index">
    @endsection

    @section('titulo')
        <h1 id="text" class="titulo-index">KOMMA</h1>
    @endsection

    @section('contenido')
        
        <h2 id="true">True ingredients <br>
            True flavors <br>
            True passion</h2>

        <form action="reserva1">
            <input id="botonIndex" type="submit" value="Reservar">
        </form>
    @endsection
