@extends('layouts.template')

@section('contenido')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-light text-dark text-center">
                    <h2 class="font-weight-bold my-3">¡<span class="h4">Agenda tu Cita!</span></h2>
                    <p class="font-weight-light mb-2">¡Estamos emocionados de atenderte! Por favor, completa el formulario para programar tu cita.</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('guardar_cita') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nombre" class="font-weight-bold">Nombre</label>
                            <input id="nombre" type="text" class="form-control rounded-pill @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Correo electrónico</label>
                            <input id="email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fecha" class="font-weight-bold">Fecha de la cita</label>
                            <input id="fecha" type="date" class="form-control rounded-pill @error('fecha') is-invalid @enderror" name="fecha" value="{{ old('fecha') }}" required>
                            @error('fecha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="mensaje" class="font-weight-bold">Mensaje (opcional)</label>
                            <textarea id="mensaje" class="form-control rounded-lg @error('mensaje') is-invalid @enderror" name="mensaje">{{ old('mensaje') }}</textarea>
                            @error('mensaje')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-4 mb-0 text-center">
                            <button type="submit" class="btn btn-dark btn-lg rounded-pill px-5">{{ __('Enviar Cita') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
