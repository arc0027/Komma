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
        <div class="container-fluid">          
            <form method="POST" action="/reservaFinalizada" class="recuadro">
                @csrf
                <h3>Datos de reserva</h3>
                <p class="text-center">Fecha: {{ $fecha }}</p>
                <p class="text-center">Hora: {{ $hora }}</p>
                <div class="row">
                    <div class="col-sm-5">

                        <label id="entrada" for="person" class="form-label">Personas</label>
                        <input type="number" min="4" max="8" id="person" name="person"
                            class="form-control" required value={{ old('person') }}>
                        @error('person')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror

                        <label id="entrada" for="phone" class="form-label">Telefono</label>
                        <input type="tel" id="phone" name="phone" class="form-control" required
                            value={{ old('phone') }} @if (Auth::user() != null) {{ auth()->user()->phone }} @endif>
                        @error('phone')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror

                        <label id="entrada" for="tarjeta" class="form-label">Menu</label>
                        <select id="menus" name="menus" class="form-select">
                            @foreach ($menus as $m)
                                <option class="text-center text-3xl" id="menus" value="{{ $m->name }}">
                                    {{ $m->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-2"></div>

                    <div class="col-sm-5">

                        <label id="entrada" for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required
                            value={{ old('email') }} @if (Auth::user() != null) {{ auth()->user()->email }} @endif>
                        @error('email')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror

                        <label id="entrada" for="name" class="form-label">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" required
                            value={{ old('name') }} @if (Auth::user() != null) {{ auth()->user()->name }} @endif>
                        @error('name')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror

                        <label id="entrada" for="tarjeta" class="form-label">Tarjeta</label>
                        <input type="text" id="tarjeta" name="tarjeta" class="form-control" required
                            value={{ old('tarjeta') }}>
                        @error('tarjeta')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>
                    <input type="hidden" id="fecha" name="fecha" value="{{ $fecha }}" {{ $fecha }}>
                    <input type="hidden" id="hora" name="hora" value="{{ $hora }}" {{ $hora }}>

                    <div class="text-center">
                        <button type="submit" class="botonRecuadro">Reservar</button>
                    </div>

                </div>
            </form>
        </div>
    @endsection
