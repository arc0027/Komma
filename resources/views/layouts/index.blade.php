<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('Logo.ico') }}">
    <title>KOMMA</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <!-- Encabezado y barra de navegacion -->
    @yield('header')
    <nav>
        <input type="checkbox" id="check" />
        <div class="boton">
            <label for="check">
                <img src="img/Menu.png" height="75" width="80" alt="Menu de opciones" />
            </label>
        </div>

        <div class="logo">
            <a href="index">
                <img src="img/Logo.svg" height="75" width="105" alt="Logo del restaurante" />
            </a>
        </div>

        <div class="links">
            <a class="transicion" href="menu">Menu</a>
            <a class="transicion" href="contacto">Contacto</a>
            <a class="reserva" href="reserva1">Reserva</a>
            <a id="login" class="transicion" href="login">
                @if (Auth::user() != null)
                    Perfil
                @else
                    Login
                @endif
            </a>
        </div>

        <div class="imagenLogo">
            <a href="login">
                @if (Auth::user() != null)
                    <img src="img/Sesion.png" height="70" width="70" alt="Boton de login" />
                @else
                    <img src="img/NoSesion.png" height="70" width="70" alt="Boton de login" />
                @endif
            </a>
        </div>
    </nav>

    @yield('titulo')
    @yield('contenido')
    </header>

    <!-- Footer -->
    <footer class=" pt-5 pb-5 footer">
        <div class="container">
            <div class="row">
                <div id="sobre-nosotros" class="col-lg-5 col-xs-12">
                    <h3>Sobre nosotros</h3>
                    <p class="pr-5"> Komma es un restaurante fundado en 2015 en Cordoba;
                        adquirido en 2020 por el fondo estadounidense KKR​,
                        con sede en Nueva York, por 200 millones de euros. La compañía se
                        convertía así en la joya de la corona del holding gastronomico en
                        Europa.</p>
                </div>
                <div id="contactos-empresa" class="col-lg-5 col-xs-12">
                    <h3 class="mt-lg-0 mt-sm-4">Información</h3>
                    <p class="mb-0"><i class="fa  fa-map-marker mr-3"></i>C. Escritora Ángeles López de Ayala, 7,
                        14005 Córdoba</p>
                    <p class="mb-0"><i class="fa fa-info mr-3"></i>Abierto: 10:00 - 00:00</p>
                    <p class="mb-0"><i class="fa fa-phone mr-3"></i>+34 600102030</p>
                    <p><i class="fa fa-envelope mr-3"></i>komma@gmail.com</p>
                </div>

                <div id="Logo" class="col-lg-1 col-xs-12">
                    <a href="index">
                        <img src="img/Logo.svg" height="75" width="105" alt="Logo del restaurante" />
                    </a>
                </div>
                <div class="col-lg-1 col-xs-12">
                    <img width="75"
                        src="https://chart.googleapis.com/chart?cht=qr&chl=https%3A%2F%2Fdaw211.medacarena.es%2Fmenu&chs=180x180&choe=UTF-8&chld=L|2"></a>
                </div>
            </div>

            <div class="row mt-5">
                <div id="copyright" class="col">
                    <p class=""><small>© 2022. All Rights Reserved.</small></p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
