<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            ["nombre" => "Montañas Rusas","edad_minima" => 12],
            ["nombre" => "Juegos de Agua","edad_minima" => 4],
            ["nombre" => "Atracciones de Ferias","edad_minima" => 2],
            ["nombre" => "Simuladores y Juegos Virtuales","edad_minima" => 6],
            ["nombre" => "Zonas de Juegos para Niños","edad_minima" => 0]
        ]);
    }
}
