@extends('layouts.medac')

@section('titulo')
    <h1>LOGIN</h1>
@endsection

@section('indice')
    <h2>Inicio > Sesion</h2>
@endsection

@section('header')
    <header class="sesion">
    @endsection

    @section('contenido')
        <div class="justify-center">
            <div class="row p-8 mb-11">
                <div id="animacion2" class="col-lg-6">
                    <fieldset id="imagen-login" class="mt-4">
                        <img src="../../../public/img/Imagen-Login.svg" class="img-fluid" alt="Imagen de login">
                    </fieldset>
                </div>

                <div class="col-lg-6">
                    <form id="formulario2" class="h-auto m-5 pt-8 pb-8 pr-16 pl-16 text-3xl" method="POST"
                        action="{{ route('login') }}">
                        @csrf
                        <label id="entrada" for="email" class="form-label">Email</label>
                        <input id="email" type="email"
                            class="form-control focus:border-yellow-600 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label id="entrada" for="password" class="form-label">Contraseña</label>
                        <input id="password" type="password"
                            class="form-control focus:border-yellow-600 @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="text-center">
                            <div class="row mb-0">
                                <div class="col">
                                    <input id="botonFormulario" type="submit" value="Iniciar sesion">
                                </div>
                                <a href="register" class="link-light">Registrarse</a>
                            </div>
                        </div>
                </div>
            </div>







            </form>
        </div>
    @endsection
