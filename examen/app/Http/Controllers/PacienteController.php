<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|string|max:10',
            'direccion' => 'required|string|max:200',
            'telefono' => 'required|string|max:20',
            'historia_clinica' => 'required|string',
        ]);

        Paciente::create($request->all());

        return redirect()->route('pacientes.create')->with('success', 'Paciente guardado correctamente');
    }
}

