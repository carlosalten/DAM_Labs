<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JuegosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('juegos')->insert([
            ["nombre" => "Montaña Rusa A", "valor_entrada" => 1200, "categoria_id" => 1],
            ["nombre" => "Tobogán de Agua B", "valor_entrada" => 1500, "categoria_id" => 2],
            ["nombre" => "Rueda de la Fortuna C", "valor_entrada" => 2000, "categoria_id" => 3],
            ["nombre" => "Simulador Espacial D", "valor_entrada" => 1800, "categoria_id" => 4],
            ["nombre" => "Juegos Infantiles E", "valor_entrada" => 1100, "categoria_id" => 5],
            ["nombre" => "Bumper Cars", "valor_entrada" => 1600, "categoria_id" => 2],
            ["nombre" => "Caza Fantasmas", "valor_entrada" => 2000, "categoria_id" => 3],
            ["nombre" => "Montaña Rusa de Noche F", "valor_entrada" => 2500, "categoria_id" => 1],
            ["nombre" => "Splash Acuático G", "valor_entrada" => 2200, "categoria_id" => 2],
            ["nombre" => "Carrusel Encantado H", "valor_entrada" => 1300, "categoria_id" => 3],
            ["nombre" => "Tirolesa Aventura I", "valor_entrada" => 1700, "categoria_id" => 4],
            ["nombre" => "Castillo Inflable J", "valor_entrada" => 1400, "categoria_id" => 5],
            ["nombre" => "Castillo de Saltos", "valor_entrada" => 1100, "categoria_id" => 5],
            ["nombre" => "Montaña Rusa de Inmersión K", "valor_entrada" => 2600, "categoria_id" => 1],
            ["nombre" => "Rio Lento L", "valor_entrada" => 1500, "categoria_id" => 2],
            ["nombre" => "Juego de Bolos M", "valor_entrada" => 1700, "categoria_id" => 3],
            ["nombre" => "Escape Virtual N", "valor_entrada" => 2300, "categoria_id" => 4],
            ["nombre" => "Mini Golf O", "valor_entrada" => 1200, "categoria_id" => 5],
            ["nombre" => "Montaña Rusa Familiar P", "valor_entrada" => 3000, "categoria_id" => 1],
            ["nombre" => "Realidad Virtual de Aventura", "valor_entrada" => 2500, "categoria_id" => 4],
            ["nombre" => "Zona de Juegos para Pequeños", "valor_entrada" => 1300, "categoria_id" => 5],
            ["nombre" => "Parque Acuático Q", "valor_entrada" => 1900, "categoria_id" => 2],
            ["nombre" => "Silla Voladora R", "valor_entrada" => 1800, "categoria_id" => 3],
            ["nombre" => "Carrera de Karts S", "valor_entrada" => 2100, "categoria_id" => 4],
            ["nombre" => "Zona de Juegos T", "valor_entrada" => 1100, "categoria_id" => 5],
            ["nombre" => "Montaña Rusa Infernal", "valor_entrada" => 2700, "categoria_id" => 1],
            ["nombre" => "Montaña Rusa de Verano", "valor_entrada" => 2300, "categoria_id" => 1],
            ["nombre" => "Tobogán de Aventura", "valor_entrada" => 1200, "categoria_id" => 2],
            ["nombre" => "Splash Acuático Extreme", "valor_entrada" => 1800, "categoria_id" => 2],
            ["nombre" => "Rio de Diversión", "valor_entrada" => 1500, "categoria_id" => 2],        
        ]);
    }
}
