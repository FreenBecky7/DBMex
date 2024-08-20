@extends('layouts.template')

@section('contenido')
<div class="container" style="background-color: #f9f9f9">
  <div class="mt-5 text-center">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Produccion audiovisual</li>
        </ol>
      </nav>
      <h3 style="color: black; font-size: 3.5em;">Producción audiovisual</h3>
  </div>
<p style="font-size: 1.2em;">
  Ofrecemos servicios de grabación, edición y corrección de color para diversos tipos de contenido,
  incluyendo: videos musicales, videos institucionales, spot publicitario, podcast, eventos en vivo,
  vlogs y estilo de vida para redes sociales.
</p>
<iframe width="800" height="450" src="https://www.youtube.com/embed/uNb7Y_BB1gw" frameborder="0" allowfullscreen style="display: block; margin: 20px auto;"></iframe>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-primary text-white" style="font-size: 1.5em;">
                    Paquete Básico
                </div>
                <div class="card-body">
                    <h5 class="card-title text-primary">$500</h5>
                    <ul>
                        <li>Video Institucional:
                            <ul>
                                <li>Grabación con una cámara de calidad estándar.</li>
                                <li>Edición básica con transiciones y música de fondo.</li>
                                <li>Duración limitada (por ejemplo, 2-3 minutos).</li>
                                <li>Entrega en formato estándar.</li>
                            </ul>
                        </li>
                        <li>Entrevistas:
                            <ul>
                                <li>Grabación de entrevistas con una o dos cámaras.</li>
                                <li>Edición simple para cortar errores y mejorar la fluidez.</li>
                                <li>Gráficos básicos con nombre y título.</li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary">Contratar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-success text-white" style="font-size: 1.5em;">
                    Paquete Avanzado
                </div>
                <div class="card-body">
                    <h5 class="card-title text-success">$1000</h5>
                    <ul>
                        <li>Video Corporativo de Alta Calidad:
                            <ul>
                                <li>Grabación con cámaras profesionales en alta resolución.</li>
                                <li>Edición avanzada con efectos visuales y corrección de color.</li>
                                <li>Entrevistas y testimonios detallados.</li>
                            </ul>
                        </li>
                        <li>Publicidad Comercial:
                            <ul>
                                <li>Producción de anuncios publicitarios creativos.</li>
                                <li>Guionización y dirección profesional.</li>
                                <li>Uso de múltiples cámaras y técnicas cinematográficas.</li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-success">Contratar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection