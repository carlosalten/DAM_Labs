<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TecnicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tecnicos')->insert([
            ["rut" => "12345678-9", "nombre" => "Carlos", "apellido" => "García"],
            ["rut" => "11234567-8", "nombre" => "María", "apellido" => "Hernández"],
            ["rut" => "15678910-3", "nombre" => "Luis", "apellido" => "Martínez"],
            ["rut" => "20123456-0", "nombre" => "Ana", "apellido" => "Rodríguez"],
            ["rut" => "19876543-2", "nombre" => "Juan", "apellido" => "López"],
            ["rut" => "97654321-1", "nombre" => "Sofía", "apellido" => "Pérez"],
            ["rut" => "5678901-6", "nombre" => "Andrés", "apellido" => "González"],
            ["rut" => "2321098-7", "nombre" => "Lucía", "apellido" => "Sánchez"],
            ["rut" => "22432109-8", "nombre" => "Javier", "apellido" => "Ramírez"],
            ["rut" => "23654321-0", "nombre" => "Elena", "apellido" => "Torres"]
        ]);
    }
}
