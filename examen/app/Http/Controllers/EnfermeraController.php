<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enfermera;

class EnfermeraController extends Controller
{
    public function create()
    {
        return view('enfermeras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'contacto' => 'required|string|max:100',
            'horario_trabajo' => 'required|string|max:100',
        ]);

        Enfermera::create($request->all());

        return redirect()->route('enfermeras.create')->with('success', 'Enfermera guardada correctamente');
    }
}
?>
