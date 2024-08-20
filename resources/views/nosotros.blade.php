@extends('layouts.template')

@section('contenido')
<style>
    /* Agrega estilos CSS para la clase que se aplicará al pasar el mouse */
.image-hover:hover {
    transform: scale(1.2); /* Cambia el tamaño de la imagen al 120% */
    transition: transform 0.3s ease; /* Agrega una transición suave */
}

</style>
<div class="container" style="background-color: #f9f9f9">
<div class="row mt-4">
  <div class="col-md-6">
 </div>
 <div class="row">
  <!-- Contenido existente -->

  <!-- Nosotros -->
  <div class="col-md-6" style="background-color: #f9f9f9; padding: 20px; border-radius: 10px; margin-bottom: 30px;">
      <h2 style="font-size: 60px; list-style-type: disc; font-weight: bold; margin-bottom: 30px; margin-top: 60px;">Nosotros</h2>
      <p style="margin-bottom: 20px;">Somos DB Mex Services, una empresa dedicada a ofrecer servicios de producción audiovisual, producción musical y producción de audio. Con años de experiencia en la industria, nos enorgullece proporcionar soluciones creativas y de alta calidad para nuestros clientes.</p>
      <p style="margin-bottom: 20px;">Nuestro equipo de profesionales altamente capacitados está comprometido con la excelencia en cada proyecto. Trabajamos estrechamente con nuestros clientes para entender sus necesidades y brindar resultados que superen sus expectativas.</p>
  </div>

  <!-- Video -->
  <div class="col-md-6" style="margin-bottom: 30px; margin-top: 70px;">
    <video class="d-block w-100" autoplay muted loop>
        <source src="{{ asset('storage/vid3.mp4') }}">
        Tu navegador no soporta el tag de video.
    </video>     
  </div>
</div>

<div class="row" style="padding: 30px;">
    <div class="col-md-12">
      <h2 style="font-size: 40px; font-weight: bold; text-align: center">Nuestra Trayectoria y Misión</h2>
    </div>
  </div>
  
<div class="row">
  <div class="col-md-6">
      <div class="card" style="background-color: #e9f7f2; margin-bottom: 30px;">
          <div class="card-body">
              <h3 class="card-title" style="text-align: left;">Nuestra Trayectoria</h3>
              <p class="card-text">Somos el único servicio de producción audiovisual, visual y musical con una larga trayectoria y experiencia en la región. A lo largo de los años, hemos brindado soluciones creativas y de alta calidad a nuestros clientes.</p>
          </div>
      </div>
  </div>

  <div class="col-md-6">
      <div class="card" style="background-color: #eaf6f9; margin-bottom: 30px;">
          <div class="card-body">
              <h3 class="card-title" style="text-align: left;">Misión</h3>
              <p class="card-text">Realizamos producciones audiovisuales, visuales y musicales con la adquisición de estudios visuales y auditivos, utilizando tecnología innovadora. Guiamos cada proyecto con la máxima calidad y calidez humana hacia nuestros clientes.</p>
          </div>
      </div>
  </div>
</div>

<div class="row" style="padding: 30px;">
    <div class="col-md-12">
      <h2 style="font-size: 40px; font-weight: bold; text-align: center">Nuestros Valores</h2>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
      <div class="card" style="background-color: #e8f4e8; margin-bottom: 30px;">
          <div class="card-body">
              <h3 class="card-title" style="text-align: left;">Excelencia</h3>
              <p class="card-text">Buscamos la calidad y calidez en cada producción, asegurando que nuestros clientes obtengan lo mejor en cada proyecto.</p>
          </div>
      </div>
  </div>

  <div class="col-md-4">
      <div class="card" style="background-color: #eaf2f5; margin-bottom: 30px;">
          <div class="card-body">
              <h3 class="card-title" style="text-align: left;">Responsabilidad</h3>
              <p class="card-text">Tomamos acciones que tienen un impacto positivo en el resultado final de cada producción y cuidamos el impacto ambiental de nuestro trabajo.</p>
          </div>
      </div>
  </div>

  <div class="col-md-4">
      <div class="card" style="background-color: #e9f0f0; margin-bottom: 30px;">
          <div class="card-body">
              <h3 class="card-title" style="text-align: left;">Pasión</h3>
              <p class="card-text">Expresamos nuestra pasión por la producción audiovisual, visual y musical, dedicándonos a mejorar la calidad de la industria.</p>
          </div>
      </div>
  </div>
</div>

<!-- Galería -->
<div class="row">
    <div class="col-md-12">
        <h2 style="font-size: 40px; font-weight: bold; margin-bottom: 40px;  margin-bottom: 30px;">Galería</h2>
    </div>
  </div>
  
  <div class="row">
      <div class="col-md-4" style="margin-bottom: 30px;">
          <div class="card">
              <img src="{{ asset('storage/1.JPG') }}" alt="Imagen 1" class="card-img-top img-fluid image-hover">
          </div>
      </div>
  
      <div class="col-md-4" style="margin-bottom: 30px;">
          <div class="card">
              <img src="{{ asset('storage/3.JPG') }}" alt="Imagen 3" class="card-img-top img-fluid image-hover">
          </div>
      </div>
  
      <div class="col-md-4" style="margin-bottom: 30px;">
          <div class="card">
              <img src="{{ asset('storage/4.JPG') }}" alt="Imagen 4" class="card-img-top img-fluid image-hover">
          </div>
      </div>
  
      <div class="col-md-4" style="margin-bottom: 30px;">
          <div class="card">
              <img src="{{ asset('storage/im1.JPG') }}" alt="Imagen 5" class="card-img-top img-fluid image-hover">
          </div>
      </div>
  
      <div class="col-md-4" style="margin-bottom: 30px;">
          <div class="card">
              <img src="{{ asset('storage/2.JPG') }}" alt="Imagen 2" class="card-img-top img-fluid image-hover">
          </div>
      </div>
  
      <div class="col-md-4" style="margin-bottom: 30px;">
          <div class="card">
              <img src="{{ asset('storage/vid.JPG') }}" alt="Video" class="card-img-top img-fluid image-hover">
          </div>
      </div>
  </div>
  
@endsection

