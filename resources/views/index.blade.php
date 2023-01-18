@extends('layouts.medac')

@section('titulo')
    <h1>KOMMA</h1>
@endsection

@section('indice')
    <h2>>>Inicio</h2>
@endsection

@section('header')
    <header>
    @endsection

    @section('contenido')
        <div class="container">
            <div id="bloque1" class="row flex justify-center">
                <div class="col-lg-9 text-center">
                    <h3>Sobre nosotros</h3>
                    <p>
                        Komma es un restaurante fundado en 2015 en la Plaza de la Corredera, Cordoba;
                        adquirido en 2020 por el fondo estadounidense KKR​,
                        con sede en Nueva York, por 200 millones de euros. La compañía se
                        convertía así en la joya de la corona del holding gastronomico en
                        Europa.
                    </p>
                </div>
            </div>

            <div id="bloque2" class="row">
                <div id="imagenBloque2" class="col-md-3 flex justify-center">
                    <img src="img/Datos.png" class="img-fluid" alt="Imagen de contacto"/>
                </div>

                <div id="infoBloque2" class="col text-center">
                    <h3>Contáctanos</h3>
                    <p>
                        C. Escritora Ángeles López de Ayala, 7, 14005 Córdoba<br />
                        <br />Abierto: 10:00 - 00:00<br />
                        <br />+34 600102030<br />
                    </p>
                </div>
            </div>
        </div>
    @endsection
