<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $encuestas = Encuesta::all();
        return view('encuestas.index', compact('encuestas'));
    }

    public function create()
    {
        return view('encuestas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_evento' => 'required|string|max:45',
            'poblacion' => 'required|integer',
            'pregunta' => 'required|string|max:255',
        ]);
        Encuesta::create($request->all());

        return redirect()->route('encuestas.index')->with('success', 'Encuesta creada exitosamente.');
    }

    public function edit($id)
    {
        $encuesta = Encuesta::find($id);
        return view('encuestas.edit', compact('encuesta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_evento' => 'required|string|max:45',
            'poblacion' => 'required|integer',
            'pregunta' => 'required|string|max:255',
        ]);

        $encuesta = Encuesta::find($id);
        $encuesta->update($request->all());

        return redirect()->route('encuestas.index')->with('success', 'Encuesta actualizada exitosamente.');
    }
    public function show($id)
    {
        $encuesta = Encuesta::findOrFail($id);
        return view('encuestas.show', compact('encuesta'));
    }

    public function destroy($id)
    {
        $encuesta = Encuesta::find($id);
        $encuesta->delete();

        return redirect()->route('encuestas.index')->with('success', 'Encuesta eliminado exitosamente.');
    }
}
