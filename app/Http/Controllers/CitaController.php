<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CitaController extends Controller
{
    public function showForm()
    {
        return view('layouts.formulario_cita');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario de cita
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'fecha' => 'required|date',
            'mensaje' => 'nullable|string',
        ]);

        // Si la validación falla, redirigir de nuevo al formulario con los errores
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Aquí puedes guardar los datos de la cita en tu base de datos
        // Por ejemplo:
        // $cita = new Cita();
        // $cita->nombre = $request->nombre;
        // $cita->email = $request->email;
        // $cita->fecha = $request->fecha;
        // $cita->mensaje = $request->mensaje;
        // $cita->save();

        // Redirigir a alguna página después de guardar la cita
        return redirect()->route('formulario_cita')->with('success', 'Cita guardada exitosamente.');
    }
}
