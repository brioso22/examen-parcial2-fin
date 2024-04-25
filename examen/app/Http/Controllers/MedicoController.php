<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
    public function create()
    {
        return view('medicamentos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'required|string',
            'stock_disponible' => 'required|integer|min:0',
        ]);

        Medicamento::create($request->all());

        return redirect()->route('medicamentos.create')->with('success', 'Medicamento guardado correctamente');
    }
}
