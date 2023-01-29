@extends('layouts.medac')

@section('titulo')
    <h1>PERFIL</h1>
@endsection

@section('indice')
    <h2>Inicio > Perfil</h2>
@endsection

@section('header')
    <header class="perfil">
    @endsection

    @section('contenido')
        <div class="container-fluid px-16 mb-10">
            <div id="perfil" class="row mb-8">
                <div class="col-sm-6 text-center mb-6">
                    <div class="flex justify-center">
                        <img src="img/Sesion.png" width="100px" height="100px" alt="Imagen de perfil" />
                    </div>
                    <p class="text-3xl">
                        <br> <b class="text-3xl">Nombre:</b> {{ auth()->user()->name }} <br />
                        <b class="text-3xl">Email:</b> {{ auth()->user()->email }} <br />
                        <b class="text-3xl">Telefono:</b> {{ auth()->user()->phone }}
                    </p>

                </div>
                <div class="col-sm-6 justify-center">
                    <form action="/misReservas" class="flex justify-center mb-8">
                        <input type="submit" id="botonPerfil" value="Mis Reservas">
                    </form>
                    <form action="/pagos" class="flex justify-center mb-8">
                        <input type="submit" id="botonPerfil" value="Metodos de pago">
                    </form>
                    <form action="{{ route('logout') }}" method="POST" class="flex justify-center mb-8">
                        @csrf
                        <input id="botonPerfil" type="submit" value="Cerrar sesion">
                    </form>
                </div>

            </div>
        </div>
    @endsection
