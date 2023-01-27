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
            @if (Auth::check())
                <!-- Formulario para usuarios logueados -->

                <form method="POST" action="/reservaFinalizada" class="recuadro">
                    @csrf
                    <h3 id="reserva-datos">Datos de reserva</h3>
                    <div class="row">
                        <div class="col-sm-4 mt-3">
                            <p class="text-center text-4xl"><i class="fa fa-calendar text-3xl mr-3"></i><b
                                    class="text-4xl">Fecha :</b> {{ date('d-m-Y', strtotime($fecha)) }}</p>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <p class="text-center text-4xl"><i class="fa fa-clock text-2xl mr-3"></i><b
                                    class="text-4xl">Hora :</b> {{ $hora }}</p>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <p class="text-center text-4xl"><i class="fa fa-phone text-2xl mr-3"></i><b
                                    class="text-4xl">Telefono :</b> {{ auth()->user()->phone }}</p>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <p class="text-center text-4xl"><i class="fa fa-user-circle text-2xl mr-3"></i><b
                                    class="text-4xl">Email :</b> {{ auth()->user()->email }}</p>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <p class="text-center text-4xl"><i class="fa fa-address-card  text-2xl mr-3"></i><b
                                    class="text-4xl">Nombre :</b> {{ auth()->user()->name }}</p>
                        </div>

                        <div class="col-sm-6">
                            <label id="entrada" for="person" class="form-label">Personas</label>
                            <input type="number" min="4" max="8" id="person" name="person"
                                class="form-control focus:border-yellow-600" required value="4">
                            @error('person')
                                <p id="validacion" class="text-white">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label id="entrada" for="tarjeta" class="form-label mb-3">Menu</label>
                            <select id="menu-select" name="menus" class="form-select focus:border-yellow-600">
                                @foreach ($menus as $m)
                                    <option class="text-center text-3xl" id="menus" value="{{ $m->name }}">
                                        {{ $m->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        @if (count($tarjetas) > 0)
                            <div class="col-sm-12">
                                <label id="entrada" for="tarjeta" class="form-label">Tarjeta</label>
                                <select id="tarjeta-select" name="tarjeta" class="form-select focus:border-yellow-600">
                                    @foreach ($tarjetas as $t)
                                        <option class="text-center text-3xl" id="tarjeta"
                                            value="{{ $t->numero_tarjeta }}">
                                            **** **** **** {{ substr($t->numero_tarjeta, -4) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @else
                            <div class="col-sm-6 mb-6">
                                <label id="entrada" for="tarjeta" class="form-label">Tarjeta</label>
                                <p class="text-center text-4xl"><i class="fa fa-credit-card text-2xl mr-3"></i>El usuario no
                                    tiene ninguna tarjeta registrada</p>
                            </div>
                            <div class="col-sm-6 flex justify-center text-center">
                                <a id="botonFormulario" href="/pagos">Registrar metodo de pago</a>
                            </div>
                        @endif

                        <input type="hidden" id="name" name="name" class="form-control focus:border-yellow-600"
                            required value={{ old('name') }} {{ auth()->user()->name }}>

                        <input type="hidden" id="email" name="email" class="form-control focus:border-yellow-600"
                            required value={{ old('email') }} {{ auth()->user()->email }}>

                        <input type="hidden" id="phone" name="phone" class="form-control focus:border-yellow-600"
                            required value={{ old('phone') }} {{ auth()->user()->phone }}>

                        <input type="hidden" id="fecha" name="fecha" value="{{ $fecha }}"
                            {{ $fecha }}>

                        <input type="hidden" id="hora" name="hora" value="{{ $hora }}"
                            {{ $hora }}>

                        @if (count($tarjetas) > 0)
                            <div class="text-center">
                                <button id="botonFormulario" type="submit" class="mt-10 mb-3">Reservar</button>
                            </div>
                        @else
                        
                        @endif


                    </div>
                </form>
            @else
                <!-- Formulario para usuarios no logueados -->
                <form method="POST" action="/reservaFinalizada" class="recuadro">
                    @csrf
                    <h3 id="reserva-datos">Datos de reserva</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="text-center text-4xl"><i class="fa fa-calendar text-3xl mr-3"></i><b
                                    class="text-4xl">Fecha :</b> {{ date('d-m-Y', strtotime($fecha)) }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-center text-4xl"><i class="fa fa-clock text-2xl mr-3"></i><b
                                    class="text-4xl">Hora :</b> {{ $hora }}</p>
                        </div>
                        <div class="col-sm-5">

                            <label id="entrada" for="person" class="form-label">Personas</label>
                            <input type="number" min="4" max="8" id="person" name="person"
                                class="form-control focus:border-yellow-600" required value="4">
                            @error('person')
                                <p id="validacion" class="text-white">
                                    {{ $message }}
                                </p>
                            @enderror

                            <label id="entrada" for="phone" class="form-label">Telefono</label>
                            <input type="tel" id="phone" name="phone"
                                class="form-control focus:border-yellow-600" required value={{ old('phone') }}
                                @if (Auth::user() != null) {{ auth()->user()->phone }} @endif>
                            @error('phone')
                                <p id="validacion" class="text-white">
                                    {{ $message }}
                                </p>
                            @enderror

                            <label id="entrada" for="tarjeta" class="form-label">Menu</label>
                            <select id="menu-select" name="menus" class="form-select focus:border-yellow-600">
                                @foreach ($menus as $m)
                                    <option class="text-center text-3xl" id="menus" value="{{ $m->name }}">
                                        {{ $m->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-2"></div>

                        <div class="col-sm-5">

                            <label id="entrada" for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email"
                                class="form-control focus:border-yellow-600" required value={{ old('email') }}
                                @if (Auth::user() != null) {{ auth()->user()->email }} @endif>
                            @error('email')
                                <p id="validacion" class="text-white">
                                    {{ $message }}
                                </p>
                            @enderror

                            <label id="entrada" for="name" class="form-label">Nombre</label>
                            <input type="text" id="name" name="name"
                                class="form-control focus:border-yellow-600" required value={{ old('name') }}
                                @if (Auth::user() != null) {{ auth()->user()->name }} @endif>
                            @error('name')
                                <p id="validacion" class="text-white">
                                    {{ $message }}
                                </p>
                            @enderror

                            <label id="entrada" for="tarjeta" class="form-label">Tarjeta</label>
                            <input type="text" id="tarjeta" name="tarjeta"
                                class="form-control focus:border-yellow-600" required value={{ old('tarjeta') }}>
                            @error('tarjeta')
                                <p id="validacion" class="text-white">
                                    {{ $message }}
                                </p>
                            @enderror


                        </div>
                        <input type="hidden" id="fecha" name="fecha" value="{{ $fecha }}"
                            {{ $fecha }}>
                        <input type="hidden" id="hora" name="hora" value="{{ $hora }}"
                            {{ $hora }}>

                        <div class="text-center">
                            <button id="botonFormulario" type="submit" class="mt-10 mb-3">Reservar</button>
                        </div>

                    </div>
                </form>
            @endif
        </div>
    @endsection
