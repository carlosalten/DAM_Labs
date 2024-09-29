<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tecnico::orderBy('apellido')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tecnico = new Tecnico();
        $tecnico->rut = $request->rut;
        $tecnico->nombre = $request->nombre;
        $tecnico->apellido = $request->apellido;
        $tecnico->save();
        return $tecnico;
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnico $tecnico)
    {
        return $tecnico;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tecnico $tecnico)
    {
        $tecnico->nombre = $request->nombre;
        $tecnico->apellido = $request->apellido;
        $tecnico->save();
        return $tecnico;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnico $tecnico)
    {
        return $tecnico->delete();
    }

    /**
     * Juegos con cantidad de mantenimientos
     */
    public function conCantidadMantenimientos()
    {
        return Juego::orderBy('apellido')->orderBy('nombre')
            ->withCount('mantenimientos as cantidad_mantenimientos')
            ->get();
    }
}
