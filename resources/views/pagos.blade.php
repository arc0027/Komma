@extends('layouts.medac')

@section('titulo')
    <h1>PAGOS</h1>
@endsection

@section('indice')
    <h2>Inicio > Perfil > Metodos de pago</h2>
@endsection

@section('header')
    <header class="perfil">
    @endsection

    @section('contenido')
        <div class="flex justify-center">
            @if (Session::has('mensaje'))
                <div id="msj" class="alert alert-success w-2/4" role="alert">
                    {{ Session::get('mensaje') }}
                </div>
            @endif
        </div>

        <div class="container-fluid">
            <form method="POST" action="/pagos" class="recuadro">
                @csrf

                <div class="row">
                    <div class="col">
                        <label id="entrada" for="numero_tarjeta" class="form-label">Numero de tarjeta</label>
                        <input type="number" id="numero_tarjeta" name="numero_tarjeta"
                            class="form-control focus:border-yellow-600" required>
                        @error('numero_tarjeta')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label id="entrada" for="fecha_vencimiento" class="form-label">Fecha de vencimiento</label>
                        <input type="date" id="fecha_vencimiento" name="fecha_vencimiento"
                            class="form-control focus:border-yellow-600" required />
                        @error('fecha_vencimiento')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label id="entrada" for="CVV" class="form-label">CVV</label>
                        <input type="number" id="CVV" name="CVV" class="form-control focus:border-yellow-600"
                            required>
                        @error('CVV')
                            <p id="validacion" class="text-white">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>
                <div class="text-center mt-8">
                    <button id="botonFormulario" type="submit" class="mt-3 mb-3">Guardar metodo de pago</button>
                </div>
            </form>
        </div>

        <div class="container-fluid">
            <div class="recuadro">
                <h4 id="lista-reservas">Tarjetas registradas</h4>
                <div id="lista">
                    <div class="text-center">
                        <table id="tabla-misreservas" class="table">

                            @if (count($tarjetas) > 0)
                                <thead id="encabezado-tabla" class="thead-dark text-7xl">
                                    <tr>
                                        <th>Numero de la tarjeta</th>
                                    </tr>
                                </thead>
                                <tbody id="contenido-tabla" class="text-7xl">

                                    @isset($tarjetas)
                                        @foreach ($tarjetas as $t)
                                            <tr>
                                                <td> **** **** **** {{ substr($t->numero_tarjeta, -4) }}</td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            @else
                                <thead id="encabezado-tabla" class="thead-dark text-7xl">
                                    <tr>
                                        <th>No hay tarjetas registradas</th>
                                    </tr>
                                </thead>
                            @endif

                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
