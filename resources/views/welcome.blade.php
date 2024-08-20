@extends('layouts.template')

@section('contenido')
<!-- Tu contenido HTML va aquí -->

<script>
    // JavaScript para mostrar/ocultar los botones al hacer clic en el icono de usuario
    document.getElementById('user-icon').addEventListener('click', function () {
        var buttonsContainer = document.getElementById('login-register-buttons');
        buttonsContainer.style.display = (buttonsContainer.style.display === 'none' || buttonsContainer.style
            .display === '') ? 'flex' : 'none';
    });
</script>

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="d-block w-100" autoplay muted loop style="opacity: 0.7; filter: brightness(0.5);">
                <source src="{{ asset('storage/video1.mp4') }}">
                Tu navegador no soporta el tag de video.
            </video>
            <div class="carousel-caption">
                <h5 id="carousel-text" style="font-size: 2.5em; text-align: center; margin-bottom: 100px; color: #fffcfc;"><strong>¡Transforma tus proyectos con nuestros paquetes de producción!</strong></h5>
                <p style="font-size: 1.5em; text-align: center; margin-bottom: 30px; color: #fffcfc;">Descubre nuestros paquetes: Básico y Avanzado, diseñados para llevar tus proyectos al siguiente nivel.</p>
                <a href="{{ route('formulario_cita') }}" class="btn btn-primary btn-lg" style="margin-bottom: 50px;">¡Agregar cita!</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

<script>
    var texts = [
        "¡Eleva tu contenido visual con nuestra producción audiovisual!",
        "¡Deja huella en tu audiencia con nuestros paquetes de producción de calidad!",
        "¡Haz que tu marca destaque con nuestras soluciones creativas de producción!"
    ];

    var currentIndex = 0;
    var textElement = document.getElementById("carousel-text");

    document.querySelector(".carousel-control-prev").addEventListener("click", function () {
        currentIndex = (currentIndex - 1 + texts.length) % texts.length;
        updateText();
    });

    document.querySelector(".carousel-control-next").addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % texts.length;
        updateText();
    });

    function updateText() {
        textElement.innerHTML = "<strong>" + texts[currentIndex] + "</strong>";
    }
</script>

<!-- Sección Nosotros -->
<div class="row mt-1">
    <div class="col-md-6">
        <img src="{{ asset('storage/NOSOTROS.JPG') }}"
            alt="Nosotros" class="img-fluid" style="width: 100%;">
    </div>

    <div class="col-md-6" style="background-color: #f9f9f9; padding: 20px; border-radius: 10px; margin-bottom: 30px;">
        <h2 style="font-size: 60px; list-style-type: disc; font-weight: bold; margin-top: 50px;">Sobre nosotros</h2>
        <p>Somos DB Mex Services, una empresa dedicada a ofrecer servicios de producción audiovisual, producción musical
            y producción de audio. Con años de experiencia en la industria, nos enorgullece proporcionar soluciones
            creativas y de alta calidad para nuestros clientes.</p>
        <p>Nuestro equipo de profesionales altamente capacitados está comprometido con la excelencia en cada proyecto.
            Trabajamos estrechamente con nuestros clientes para entender sus necesidades y brindar resultados que
            superen sus expectativas.</p>
        <p>¡Descubre cómo nuestros paquetes pueden llevar tu contenido al siguiente nivel!</p>
        <!-- Cambia la ruta por la correspondiente a tu formulario -->
    </div>

    <style>
        .center-text {
            text-align: center;
        }
    </style>
    <div class="container" style="background-color: #f9f9f9">
        <div class="text-center" style="margin-top: 60px;">
            <h3>Catálogo de servicios</h3>
        </div>

        <div class="row">
            <!-- Servicio 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/vid.JPG') }}"
                        class="card-img-top" alt="Servicio 1">
                    <div class="card-body">
                        <h5 class="card-title">Producción audiovisual</h5>
                        <!-- Botón Más Información -->
                        <a href="{{ route('audiovisual') }}" class="btn btn-primary">Más Información</a>

                    </div>
                </div>
            </div>

            <!-- Servicio 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/MUSIC.JPG') }}" class="card-img-top"
                        alt="Servicio 2">
                    <div class="card-body">
                        <h5 class="card-title">Producción musical</h5>
                        <!-- Botón Más Información -->
                        <a href="{{ route('musical') }}" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>

            <!-- Servicio 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/im1.JPG') }}" class="card-img-top"
                        alt="Servicio 3">
                    <div class="card-body">
                        <h5 class="card-title">Producción de audio</h5>
                        <!-- Botón Más Información -->
                        <a href="{{ route('audio') }}" class="btn btn-primary">Más Información</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
