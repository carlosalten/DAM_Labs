<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class JuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Juego::orderBy('nombre')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $juego = new Juego();
        $juego->nombre = $request->nombre;
        $juego->valor_entrada = $request->valor_entrada;
        $juego->categoria_id = $request->categoria_id;
        $juego->save(); 
        return response()->json($juego, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Juego $juego)
    {
        return $juego;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juego $juego)
    {
        $juego->nombre = $request->nombre;
        $juego->valor_entrada = $request->valor_entrada;
        $juego->save(); 
        return response()->json($juego, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juego $juego)
    {
        $juego->delete();
        return response()->json(true, 200);
    }

    /**
     * Cambiar un juego de categpría
     */
    public function cambiarCategoria(Request $request, Juego $juego)
    {
        $juego->categoria_id = $request->categoria_id;
        $juego->save(); 
        return response()->json($juego, 200);
    }

    /**
     * Juegos con su categoria
     */
    public function conCategoria()
    {
        return Juego::with('categoria')->get()->makeHidden('categoria_id');
    }

     /**
     * Juegos con cantidad de mantenimientos
     */
    public function conCantidadMantenimientos()
    {
        return Juego::orderBy('nombre')
            ->withCount('mantenimientos as cantidad_mantenimientos')
            ->get()
            ->load('categoria')
            ->makeHidden('categoria_id');
    }
}
