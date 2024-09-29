<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;

class MantenimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Mantenimiento::orderBy('fecha')->get()->makeHidden('observaciones');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mantenimiento = new Mantenimiento();
        $mantenimiento->fecha = $request->fecha;
        $mantenimiento->tecnico_rut = $request->tecnico_rut;
        $mantenimiento->juego_id = $request->juego_id;
        $mantenimiento->observaciones = $request->observaciones;
        $mantenimiento->save();
        return $mantenimiento;
    }

    /**
     * Display the specified resource.
     */
    public function show(Mantenimiento $mantenimiento)
    {
        return $mantenimiento;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        $mantenimiento->fecha = $request->fecha;
        $mantenimiento->observaciones = $request->observaciones;
        $mantenimiento->save();
        return $mantenimiento;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mantenimiento $mantenimiento)
    {
        return $mantenimiento->delete();
    }

    /**
     * Mantenimientos con nombre de técnico y juego
     */
    public function conTecnicoJuego()
    {
        return Mantenimiento::with(['tecnico:rut,apellido,nombre', 'juego:id,nombre'])
        ->orderBy('fecha')
        ->get()
        ->makeHidden(['juego_id', 'tecnico_rut', 'observaciones']);
    }

    /**
     * Cambiar el juego al que se hizo mantenimiento
     */
    public function cambiarJuego(Request $request, Mantenimiento $mantenimiento)
    {
        $mantenimiento->juego_id = $request->juego_id;
        $mantenimiento->save();
        return $mantenimiento;
    }

    /**
     * Cambiar el técnico que hizo el mantenimiento
     */
    public function cambiarTecnico(Request $request, Mantenimiento $mantenimiento)
    {
        $mantenimiento->tecnico_rut = $request->tecnico_rut;
        $mantenimiento->save();
        return $mantenimiento;
    }
}
