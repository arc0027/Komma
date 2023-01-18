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
                        <input type="number" id="numero_tarjeta" name="numero_tarjeta" class="form-control focus:border-yellow-600" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label id="entrada" for="fecha_vencimiento" class="form-label">Fecha de vencimiento</label>
                        <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" class="form-control focus:border-yellow-600" required />
                    </div>
                    <div class="col-6">
                        <label id="entrada" for="CVV" class="form-label">CVV</label>
                        <input type="number" id="CVV" name="CVV" class="form-control focus:border-yellow-600" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="botonFormulario">Guardar metodo de pago</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
