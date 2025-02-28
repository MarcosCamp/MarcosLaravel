<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use App\Models\Skin;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los personajes con sus skins
        $personajes = Personaje::with('skins')->get();
        return view('personajes.index', compact('personajes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personajes.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required|in:rango,melee',
            'categoria' => 'required',
            'vida' => 'required|integer',
            'hipercarga' => 'required|boolean',
        ]);

        Personaje::create($request->all());  // Guardar el personaje en la base de datos

        return redirect()->route('personajes.index')->with('success', 'Personaje creado correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personaje $personaje)
    {
        return view('personajes.edit', compact('personaje'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personaje $personaje)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required|in:rango,melee',
            'categoria' => 'required',
            'vida' => 'required|integer',
            'hipercarga' => 'required|boolean',
        ]);

        $personaje->update($request->all());  // Actualizar el personaje en la base de datos

        return redirect()->route('personajes.index')->with('success', 'Personaje actualizado.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje)
    {
        $personaje->delete();  // Eliminar el personaje
        return redirect()->route('personajes.index')->with('success', 'Personaje eliminado.');
    }

}
