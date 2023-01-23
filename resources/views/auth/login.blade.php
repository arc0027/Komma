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
<div class="container">
    <div class="flex justify-center">
        <div id="formulario2" class="w-3/12 h-auto m-6 pt-8 pb-8 pr-16 pl-16 text-3xl">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label id="entrada" for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control focus:border-yellow-600 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    
                <label id="entrada" for="password" class="form-label">Contraseña</label>
                <input id="password" type="password" class="form-control focus:border-yellow-600 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <div class="text-center">
                    <div class="row mb-0">
                        <div class="col">
                            <input type="submit" class="botonFormulario" value="Iniciar sesion">
                        </div> 
                        <a href="register" class="link-light">Registrarse</a> 
                    </div>
                </div>
                
            </form>
            
        </div>
    </div>
</div>
@endsection
