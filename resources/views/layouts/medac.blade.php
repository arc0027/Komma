<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Web de gestión de reservas de un restaurante de lujo</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  </head>

  <body>
    <!-- Encabezado y barra de navegacion -->
    @yield('header')
      <nav>
        <input type="checkbox" id="check" />
        <div class="boton">
          <label for="check">
            <img src="img/Menu.png" height="75" width="80" alt="Menu de opciones"/>
          </label>
        </div>

        <div class="logo">
          <a href="index">
            <img src="img/Logo.svg" height="75" width="105" alt="Logo del restaurante"/>
          </a>
        </div>

        <div class="links">
          <a class="transicion" href="menu">Menu</a>
          <a class="transicion" href="contacto">Contacto</a>
          <a class="reserva" href="reserva1">Reserva</a>
          <a id="login" class="transicion" href="login"> @if (Auth::user() != null)
          Perfil @else Login @endif</a>
        </div>

        <div class="imagenLogo">
          <a href="login">
            @if (Auth::user() != null)
              <img src="img/Sesion.png" height="70" width="70" alt="Boton de login"/>
            @else
              <img src="img/NoSesion.png" height="70" width="70" alt="Boton de login"/>
            @endif
          </a>
        </div>
      </nav>
      
      @yield('titulo')
    </header>

    <!-- Indice de las paginas -->
    <div class="indice">
      @yield('indice')
    </div>

    <!-- Contenido -->
    <main>
      @yield('contenido')
    </main>

    <!-- Footer -->
    <footer>
      <div class="flex justify-center">
        <a href="index">
          <img src="img/Logo.svg" height="75" width="105" alt="Logo del restaurante"/>
        </a>
      </div>  
      <p class="text-center">© Copyright: All rights reserved</p>
    </footer>
  </body>
</html>
