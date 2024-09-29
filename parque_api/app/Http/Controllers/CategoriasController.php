<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categoria::orderBy('nombre')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->edad_minima = $request->edad_minima;
        $categoria->save();
        return $categoria;
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->nombre = $request->nombre;
        $categoria->edad_minima = $request->edad_minima;
        $categoria->save();
        return $categoria;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        return $categoria->delete();
    }

    /**
     * Categorias con sus juegos asociados
     */
    public function conJuegos()
    {
        return Categoria::orderBy('nombre')->get()->load('juegos');
    }

     /**
     * Categorias con cantidad de juegos
     */
    public function conCantidadJuegos()
    {
        return Categoria::orderBy('nombre')->withCount('juegos as cantidad_juegos')->get();
    }
}
