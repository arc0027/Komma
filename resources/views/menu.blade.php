@extends('layouts.medac')

@section('titulo')
    <h1>MENU</h1>
@endsection

@section('indice')
    <h2>Inicio > Menu</h2>
@endsection

@section('header')
    <header class="menus">
    @endsection

    @section('contenido')
        <div class="container">
            <div id="menu" class="row ">
                <div class="col-sm-2 mb-3">
                    <fieldset>
                        <img src="img/Menu 1.png" class="img-fluid" alt="Menu 1"/>
                    </fieldset>
                </div>
                <div class="col text-center">
                    <h3>El pulpo de roca con miel de membrillo de Atrapallada</h3>
                    <p>
                        Unas patas de pulpo pasadas por la parrilla, servidas sobre un
                        puré de patata con pimentón y acompañadas de una original miel de
                        membrillo.
                    </p>
                </div>
            </div>

            <div id="menu" class="row">
                <div class="col-sm-2 mb-3">
                    <fieldset>
                        <img src="img/Menu 2.png" class="img-fluid" alt="Menu 2"/>
                    </fieldset>
                </div>
                <div class="col text-center">
                    <h3>Gazpacho de frutas</h3>
                    <p>
                        Un refrescante gazpacho de frutas con una elaboración que combina,
                        fresas, cerezas, mejillones y navajas, conjuntadas perfectamente
                        para servir como entrante.
                    </p>
                </div>
            </div>

            <div id="menu" class="row">
                <div class="col-sm-2 mb-3">
                    <fieldset>
                        <img src="img/Menu 3.png" class="img-fluid" alt="Menu 3"/>
                    </fieldset>
                </div>
                <div class="col text-center">
                    <h3>Gambas marinadas</h3>
                    <p>
                        Un carpaccio de gambas marinadas, perfectamente aliñadas y con una
                        preciosa presentación.
                    </p>
                </div>
            </div>

            <div id="menu" class="row">
                <div class="col-sm-2 mb-3">
                    <fieldset>
                        <img src="img/Menu 4.png" class="img-fluid" alt="Menu 4"/>
                    </fieldset>
                </div>
                <div class="col text-center">
                    <h3>Steak tartar</h3>
                    <p>
                        Steak tartar, preparado al gusto del cliente y terminado de
                        mezclar a la vista y en la mesa es realmente inolvidable.
                    </p>
                </div>       
            </div>

            <div id="menu" class="row">
                <div class="col-sm-2 mb-3">
                    <fieldset>
                        <img src="img/Menu 5.png" class="img-fluid" alt="Menu 5"/>
                    </fieldset>
                </div>
                <div class="col text-center">
                    <h3>Arroz de costilla de cerdo y ali oli de tomillo</h3>
                    <p>
                        Un arroz meloso, con trocitos de costilla de cerdo de textura
                        impresionante, crujiente en el exterior y cremosa dentro, una
                        salsa potente y unas verduras mini para acompañar, hacen de este
                        bocado una auténtica delicia.
                    </p>
                </div>
            </div>
        </div>
    @endsection
