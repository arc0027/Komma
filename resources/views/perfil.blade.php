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
        <div class="container-fluid">
            <div id="perfil" class="row">
                <div class="col-sm-2 text-center justify-center">
                    <div class="flex justify-center">
                        <img src="img/Sesion.png" width="100px" height="100px" alt="Imagen de perfil"/>
                    </div>
                    <p>
                        <br> <b class="text-2xl">Nombre:</b> {{ auth()->user()->name }} <br />
                        <b class="text-2xl">Email:</b> {{ auth()->user()->email }} <br />
                        <b class="text-2xl">Telefono:</b> {{ auth()->user()->phone }}
                    </p>
                </div>
                <div class="col-sm-10">
                    <form class="recuadro">
                        <div class="opcion">
                            <a href="misReservas">
                                <div class="text-center">
                                    <p>Mis reservas</p>
                                </div>
                            </a>
                        </div>
                        <div class="opcion">
                            <a href="pagos">
                                <div class="text-center">
                                    <p>Metodos de pago</p>
                                </div>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <form action="{{ route('logout') }}" method="POST" class="flex justify-center mb-8">
                        @csrf
                        <input type="submit" class="botonRecuadro" value="Cerrar sesion">
                    </form>
                </div>
            </div>

        </div>
    @endsection
