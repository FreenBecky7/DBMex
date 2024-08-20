<!DOCTYPE html>
<html lang="en">

<head>
  <title>DB Mex Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      margin: 0;
      padding: 0;
    }

    .navbar {
      border-bottom: none;
    }

    .navbar-brand {
      font-size: 1.5em;
      font-weight: bold;
      color: #000000;
    }

    .navbar-toggler {
      border-color: #000000;
    }

    .navbar-nav {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .navbar-nav .nav-item {
      margin: 0 15px; /* Ajusta el margen derecho e izquierdo según tus necesidades */
    }

    .navbar-nav .nav-link {
      color: #000000;
      font-weight: bold;
    }

    .navbar-nav .nav-item.active .nav-link {
      background-color: transparent;
      color: black;
      font-size: 20px; /* Ajusta el tamaño de fuente según tus necesidades */
    }

    .navbar-nav .nav-item.dropdown:hover .nav-link {
      color: #000000;
    }

    .form-control {
      border-color: #000000;
    }

    .btn-outline-success {
      color: #000000;
      border-color: #000000;
    }

    .btn-outline-success:hover {
      color: #fff;
      background-color: #000000;
    }

    .jumbotron {
      background: rgba(0, 0, 0, 0.5);
      color: #fff;
      margin-bottom: 0;
      text-shadow: 2px 2px 4px #000000;
      padding: 10px 10px; /* Ajusta el padding para dar espacio al carrusel */
      position: relative;
    }

    .jumbotron h1 {
      font-size: 2em;
      margin-bottom: 20px;
    }

    .carousel {
      margin-top: 10px; /* Ajusta el margen superior del carrusel según tus necesidades */
    }

    .carousel-inner img {
      height: 600px; /* Ajusta la altura según tus necesidades */
      object-fit: cover;
    }


    .container {
      background: rgba(0, 0, 0, 0.1);
      color: #000;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 10px; /* Ajusta el margen superior según tus necesidades */
    }

    .container h3 {
      color: #000000;
    }

    .container p {
      color: #555;
    }

    .shrink {
  max-width: 10% !important;
  transition: max-width 0.5s ease-in-out;
}
/* Estilo adicional para la sombra en la parte inferior del fondo blanco */
nav {
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
        }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-light">
    <div class="container-fluid">
        <img src="{{ asset('storage/logo.png') }}" alt="DB Mex Services Logo" style="max-width: 13%; height: auto;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav ml-auto d-flex">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/" style="color: black;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nosotros') }}" style="color: black;">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: black;">
                        Servicios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('audiovisual') }}" style="color: black;">Producción audiovisual</a></li>
                        <li><a class="dropdown-item" href="{{ route('musical') }}" style="color: black;">Producción musical</a></li>
                        <li><a class="dropdown-item" href="{{ route('audio') }}" style="color: black;">Producción de audio</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('contacto') }}" style="color: black;">Contacto</a>
                </li>
            </ul>
        </div>

        <form class="d-flex" onsubmit="return redirectToSearch()">
          <input class="form-control me-2" type="text" id="nombreServicioInput" placeholder="Nombre del servicio" aria-label="Nombre del servicio" style="border: 1px solid black;">
          <button class="btn btn-outline-success" type="submit" style="color: black; border: 1px solid black;">Buscar</button>
      </form>
      
      <script>
          function redirectToSearch() {
              // Obtener el valor del input
              var nombreServicio = document.getElementById("nombreServicioInput").value;
      
              // Validar que el input no esté vacío
              if (nombreServicio.trim() === "") {
                  alert("Por favor ingresa un nombre de servicio");
                  return false; // Evitar enviar el formulario si el input está vacío
              }
      
              // Verificar si la palabra clave es "audiovisual", "video", "podcast", "vlocs" o "redes sociales"
              var esPalabraClaveAudiovisual = nombreServicio.toLowerCase().includes("audiovisual") || nombreServicio.toLowerCase().includes("video") || nombreServicio.toLowerCase().includes("podcast") || nombreServicio.toLowerCase().includes("vlocs") || nombreServicio.toLowerCase().includes("redes sociales");
      
              // Verificar si la palabra clave es "produccion de audio" o "musical"
              var esPalabraClaveProduccionAudio = nombreServicio.toLowerCase().includes("audio") || nombreServicio.toLowerCase().includes("musical");
      
              // Construir la URL de redirección
              var url;
              if (esPalabraClaveAudiovisual) {
                  // Redirigir a la página de audiovisual
                  url = "{{ route('audiovisual') }}";
              } else if (esPalabraClaveProduccionAudio) {
                  // Redirigir a la página de producción de audio
                  url = "{{ route('audio') }}";
              } else {
                  // Redirigir a la página de búsqueda con el nombre del servicio
                  url = "http://dbmx.test/buscar?query=" + encodeURIComponent(nombreServicio);
              }
      
              // Redirigir a la URL
              window.location.href = url;
      
              return false; // Evitar enviar el formulario
          }
      </script>
    </div>
</nav>

    @yield('contenido')


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <div class="container">
        <footer class="d-flex flex-column justify-content-center align-items-center py-3 my-4 border-top custom-footer">
            <div class="mb-3">
                <ul class="nav list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="https://twitter.com/ejemplo"><img src="https://cdn-icons-png.flaticon.com/128/5969/5969020.png" alt="Twitter" width="30"></a></li>
                    <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/ejemplo"><img src="https://cdn-icons-png.flaticon.com/128/3955/3955024.png" alt="Instagram" width="30"></a></li>
                    <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/ejemplo"><img src="https://cdn-icons-png.flaticon.com/128/5968/5968764.png" alt="Facebook" width="30"></a></li>
                </ul>
            </div>
            <div class="text-center">
              <span class="mb-3 mb-md-0 text-while">&copy; 2024 | DB Mex Services</span>
          </div>
          
        </footer>
    </div>

<!-- Incluir Bootstrap JS (Asegúrate de incluir Bootstrap JS en tu HTML) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('swal'))
        <script>
            Swal.fire({!! json_encode(session('swal')) !!});
        </script>
    @endif
    {{-- @if(session()->has('swal'))
    <script>
        {!! session('swal')['custom_js'] !!}
    </script>
@endif --}}


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Script para activar el carrusel -->
  <script>
    $(document).ready(function () {
      $('#myCarousel').carousel({
        interval: 5000, // Cambio automático cada 5 segundos
        wrap: true // Repetir las imágenes al final
     
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        var myCarousel = document.getElementById('myCarousel');

        // Solo necesitas el event listener para 'mouseover'
        myCarousel.addEventListener('mouseover', function () {
            // Puedes agregar lógica adicional si es necesario
        });
        // El carrusel continuará su reproducción automática sin intervención
    });
</script>

  <!-- ChatBot -->
<script>
  var botmanWidget = {
      aboutText: "ChatBot 🦝",
      introMessage: "¡Bienvenido! Soy un Chat de ayuda que te servirá para orientarte en la página. Para empezar a recibir ayuda escribe la palabra 'Hola'."
  };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</body>

</html>
