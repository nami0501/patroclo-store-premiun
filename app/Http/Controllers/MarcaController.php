<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    public function show(Marca $marca)
    {
        return view('marcas.show', compact('marca'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo_pais' => 'nullable|string|max:255',
            'logo_url' => 'nullable|string|max:255',
            'estado_auditoria' => 'required|char|size:1',
        ]);

        Marca::create($request->all());
        return redirect()->route('marcas.index');
    }

    public function edit(Marca $marca)
    {
        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo_pais' => 'nullable|string|max:255',
            'logo_url' => 'nullable|string|max:255',
            'estado_auditoria' => 'required|char|size:1',
        ]);

        $marca->update($request->all());
        return redirect()->route('marcas.index');
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect()->route('marcas.index');
    }
}
