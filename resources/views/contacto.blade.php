@extends('layouts.template')

@section('contenido')
<style>
    body {
        background: -webkit-linear-gradient(left, #000000, #be0c0c);
    }

    .contact-form {
        background-color: transparent;
        margin-top: 10%;
        margin-bottom: 5%;
        width: 70%;
    }

    .contact-form .form-control {
        border-radius: 1rem;
    }

    .contact-image {
        text-align: center;
    }

    .contact-image img {
        border-radius: 6rem;
        width: 11%;
        margin-top: -3%;
    }

    .contact-form form {
        padding: 14%;
    }

    .contact-form form .row {
        margin-bottom: -7%;
    }

    .contact-form h3 {
        margin-bottom: 8%;
        margin-top: -10%;
        text-align: center;
        color: #ffffff;
        font-size: xx-large;
        font-weight: bold;
    }

    .contact-form .btnContact {
        width: 50%;
        border: none;
        border-radius: 1rem;
        padding: 1.5%;
        background: #dc3545;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
    }

    .btnContactSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        color: #fff;
        background-color: #fbfbfc;
        border: none;
        cursor: pointer;
    }

    /* Footer styles */
    footer {
        color: #ffffff;
    }

    footer a {
        color: #ffffff;
    }

    /* Icon styles */
    .icon {
        margin-right: 5px;
        color: #ffffff; /* White text color for icons */
    }
</style>

<div class="container contact-form">
    <div class="contact-image mb-3">
        <img src="{{ asset('storage/DBMEX.png') }}" alt="DB Mex Services Logo" style="width: 300px; height: 160px; object-fit: contain">
    </div>

    <!-- Deja tu mensaje section -->
    <div class="deja-tu-mensaje" style="margin-top: -99px;">
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <h3 style="margin-top: 10; font-size: xx-large; font-weight: bold;">Deja tu mensaje</h3>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nombre *" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Dirección de correo electrónico *" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Teléfono *" value="" required />
                    </div>
                    <div class="form-group">
                        <select name="service" class="form-control" required>
                            <option value="">Selecciona el servicio *</option>
                            <option value="Producción audiovisual">Producción audiovisual</option>
                            <option value="Producción musical">Producción musical</option>
                            <option value="Producción de audio">Producción de audio</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Mensaje *" style="width: 100%; height: 150px;" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btnContact" value="ENVIAR MENSAJE" />
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Contacto section -->
    <footer class="d-flex justify-content-evenly row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <h5>Contacto</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <i class="fab fa-whatsapp icon"></i><strong>Whatsapp:</strong> <a href="https://wa.me/524922107134" class="nav-link p-0 text-white" style="text-decoration: none;">(492) 210 7134</a>
                </li>
                <li class="nav-item mb-2">
                    <i class="fas fa-phone icon"></i><strong>Teléfonos:</strong>
                    <ul style="list-style-type: none; padding: 0;">
                        <li><i class=""></i><a href="tel:(492) 924 4061" style="text-decoration: none; color: white;">(492) 210 7134</a></li>
                        <li><i class=""></i><a href="tel:(492) 922 0664" style="text-decoration: none; color: white;">(492) 922 0664</a></li>
                    </ul>
                </li>
                <li class="nav-item mb-2">
                    <i class="far fa-envelope icon"></i><strong>Correo:</strong> <a href="mailto:jkimkj76@gmail.com.mx" style="text-decoration: none; color: white;">jkimkj76@gmail.com.mx</a>
                </li>
                <li class="nav-item mb-2">
                    <hr>
                    <i class="far fa-clock icon"></i><strong>Horario:</strong>
                    <ul>
                        <li>Lunes a Viernes: 8:00 am – 9:00 pm</li>
                        <li>Sábados: 8:00 am – 2:00 pm</li>
                        <li>Domingos: Cerrado</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Sucursal</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <strong>Sucursal Zacatecas</strong>
                    <p class="text-white">Blvd. El Bote 202, Colonia Ciudad Argentum, 98040 Zacatecas, Zac.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.6897485479553!2d-102.60033662570626!3d22.77689232545368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824e7337b8e893%3A0x6a7fdd5be3c3d3dd!2sGaler%C3%ADas%20Zacatecas!5e0!3m2!1ses!2smx!4v1709086139973!5m2!1ses!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </li>
            </ul>
        </div>
    </footer>
</div>
@endsection
