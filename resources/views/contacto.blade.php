@extends('layouts.medac')

@section('titulo')
    <h1>CONTACTO</h1>
@endsection

@section('indice')
    <h2>Inicio > Contacto</h2>
@endsection

@section('header')
    <header class="contactos">
    @endsection

    @section('contenido')
        <div class="flex justify-center">
            @if (Session::has('mensaje'))
                <div id="msj" class="alert alert-success w-2/4" role="alert">
                    {{ Session::get('mensaje') }}
                </div>
            @endif
        </div>

        <div class="flex justify-center">
            <form id="formulario" method="POST" action="/contacto" class="w-3/12 h-auto m-6 pt-8 pb-8 pr-16 pl-16">
                @csrf

                <div class="row  text-4xl">
                    <div class="col-sm-5">

                        <label id="entrada" for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email"
                            class="flex w-full py-3 px-4 mb-6 text-center border-2 rounded leading-tight focus:outline-none focus:border-yellow-600"
                            placeholder="Email" value={{ old('email') }}
                            @if (Auth::user() != null) {{ auth()->user()->email }} @endif>
                        @error('email')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror

                        <label id="entrada" for="email_confirmation" class="form-label">Confirmacion email</label>
                        <input type="email" id="email_confirmation" name="email_confirmation"
                            class="flex w-full py-3 px-4 mb-6 text-center border-2 rounded leading-tight focus:outline-none focus:border-yellow-600"
                            placeholder="Confirmacion email" value={{ old('email') }}
                            @if (Auth::user() != null) {{ auth()->user()->email }} @endif>
                        @error('email_confirmation')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror


                        <label id="entrada" for="name" class="form-label">Nombre</label>
                        <input type="text" id="name" name="name"
                            class="flex w-full py-3 px-4 mb-6 text-center border-2 rounded leading-tight focus:outline-none focus:border-yellow-600"
                            placeholder="Nombre" value={{ old('name') }}
                            @if (Auth::user() != null) {{ auth()->user()->name }} @endif>
                        @error('name')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror


                    </div>

                    <div class="col-2"></div>

                    <div class="col-sm-5">
                        <label id="entrada" for="asunto" class="form-label">Asunto</label>
                        <input type="text" id="asunto" name="asunto"
                            class="flex w-full py-3 px-4 mb-6 text-center border-2 rounded leading-tight focus:outline-none focus:border-yellow-600"
                            placeholder="Asunto" value={{ old('asunto') }}>
                        @error('asunto')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror

                        <label id="entrada" for="message" class="form-label">Mensaje</label>
                        <textarea id="message" name="message"
                            class="flex w-full py-3 px-4 mb-6 text-center border-2 rounded leading-tight focus:outline-none focus:border-yellow-600"
                            placeholder="Mensaje" value={{ old('message') }}></textarea>
                        @error('message')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="text-center">
                        <input id="botonFormulario" type="submit" class="mt-4 mb-3" value="Enviar">
                    </div>
                </div>



            </form>
        </div>
    @endsection
