@extends('layouts.medac')

@section('titulo')
    <h1>REGISTRO</h1>
@endsection

@section('indice')
    <h2>Inicio > Registro</h2>
@endsection

@section('header')
    <header class="sesion">
    @endsection

    @section('contenido')
        <div class="flex justify-center">
            <form id="formulario" method="POST" action="{{ route('register') }}"
                class="w-3/4 h-auto m-6 pt-8 pb-8 pr-16 pl-16 text-3xl">
                @csrf
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <label id="entrada" for="email" class="form-label">Email</label>
                        <input id="email" type="email"
                            class="form-control focus:border-yellow-600 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-sm-5 text-center">
                        <label id="entrada" for="name" class="form-label">Nombre</label>
                        <input id="name" type="text"
                            class="form-control focus:border-yellow-600 @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label id="entrada" for="phone" class="form-label">Telefono</label>
                        <input id="phone" type="tel"
                            class="form-control focus:border-yellow-600 @error('phone') is-invalid @enderror" name="phone"
                            value="{{ old('phone') }}" required autocomplete="phone" placeholder="Telefono">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-2"></div>

                    <div class="col-sm-5 text-center">

                        <label id="entrada" for="password" class="form-label">Contraseña</label>
                        <input id="password" type="password"
                            class="form-control focus:border-yellow-600 @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password" placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label id="entrada" for="password_confirmation" class="form-label">Confirmacion
                            contraseña</label>
                        <input id="password_confirmation" type="password" class="form-control focus:border-yellow-600"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirmar contraseña">

                    </div>
                </div>

                <div class="row text-center mb-0 mt-8">
                    <div class="col">
                        <input id="botonFormulario" type="submit" value="Registrarse">
                    </div>
                    <a href="login" class="link-light">Login</a>
                </div>

            </form>
        </div>
    @endsection
