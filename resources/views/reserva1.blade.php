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
        <div class="row flex justify-center">
            <div class="col-md-8">
                <div id="calendario"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 flex justify-center text-center mt-5 mb-5">
                <div class="horasDisponibles"></div>
            </div>
        </div>

        <form id="formularioHorario" action="/reserva2" method="POST">
            @csrf
            <input type="hidden" id="fecha" class="form-control" name="fecha">
            <input type="hidden" id="hora" class="form-control" name="hora">
            <input id="botonFormulario" type="submit" style="display: none;" value="Confirmar horario">
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendario = document.getElementById("calendario");
            var calendar = new FullCalendar.Calendar(calendario, {
                aspectRatio: 2,
                contentHeight: 450,
                headerToolbar: {
                    start: "today,dayGridMonth",
                    center: "title",
                    end: "prevYear,prev,next,nextYear",
                },
                footerToolbar: {
                    left: "",
                    center: "prev,next",
                    right: "",
                },
                buttonText: {
                    today: "Hoy",
                    month: "Mes",
                },
                locale: "es",
                editable: true,
                initialView: "dayGridMonth",
                eventColor: "#cda434",
                selectable: true,
                events: "/fechasDisponibles",
                eventClick: function(event) {
                    let fecha = moment(event.event.start).format("Y-MM-DD");
                    $.ajax({
                        type: "POST",
                        url: "horasDisponibles",
                        data: {
                            fecha: fecha,
                            type: "mostrarHoras"
                        },
                        success: function(response) {
                            var horasDisponibles = document.querySelector(
                                ".horasDisponibles");
                            horasDisponibles.setAttribute("id", "formulario");
                            horasDisponibles.innerHTML = "";
                            var titulohoras = document.createElement("h3");
                            titulohoras.innerHTML = "Horas";
                            horasDisponibles.appendChild(titulohoras);
                            response.forEach(function(response) {
                                var botonhoras = document.createElement("button");
                                botonhoras.setAttribute("id", "botonFormulario");
                                botonhoras.className = "m-3";
                                botonhoras.innerHTML = response.hora;
                                botonhoras.addEventListener("click", function() {
                                    document.getElementById("fecha").value =
                                        fecha;
                                    document.getElementById("hora").value =
                                        response.hora;
                                    document.getElementById(
                                        "formularioHorario").submit();
                                });
                                horasDisponibles.appendChild(botonhoras);
                            });
                            $("html, body").animate({
                                scrollTop: $(".horasDisponibles").offset().top
                            }, "fast");
                        }

                    })
                }

            });
            calendar.render();
        });
    </script>
@endsection
