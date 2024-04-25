<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{
    public function create()
    {
        return view('recetas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'medico_id' => 'required|integer',
            'paciente_id' => 'required|integer',
            'fecha_emision' => 'required|date',
        ]);

        Receta::create($request->all());

        return redirect()->route('recetas.create')->with('success', 'Receta guardada correctamente');
    }
}
    