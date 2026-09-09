<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MantenimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mantenimientos')->insert([
            ["juego_id" => 1, "tecnico_rut" => "12345678-9", "fecha" => "2024-09-01 10:00:00", "observaciones" => "Revisión general del sistema."],
            ["juego_id" => 2, "tecnico_rut" => "11234567-8", "fecha" => "2024-09-02 11:30:00", "observaciones" => "Cambio de mangueras de agua."],
            ["juego_id" => 3, "tecnico_rut" => "15678910-3", "fecha" => "2024-09-03 09:15:00", "observaciones" => "Lubricación de engranajes."],
            ["juego_id" => 1, "tecnico_rut" => "20123456-0", "fecha" => "2024-09-04 14:45:00", "observaciones" => "Prueba de seguridad completa."],
            ["juego_id" => 4, "tecnico_rut" => "19876543-2", "fecha" => "2024-09-05 13:20:00", "observaciones" => "Reemplazo de luces LED."],
            ["juego_id" => 5, "tecnico_rut" => "97654321-1", "fecha" => "2024-09-06 10:30:00", "observaciones" => "Limpieza de área de juego."],
            ["juego_id" => 2, "tecnico_rut" => "5678901-6", "fecha" => "2024-09-07 12:00:00", "observaciones" => "Chequeo de bomba de agua."],
            ["juego_id" => 6, "tecnico_rut" => "2321098-7", "fecha" => "2024-09-08 11:15:00", "observaciones" => "Inspección de seguridad."],
            ["juego_id" => 1, "tecnico_rut" => "22432109-8", "fecha" => "2024-09-09 14:00:00", "observaciones" => "Reparación de asientos."],
            ["juego_id" => 7, "tecnico_rut" => "23654321-0", "fecha" => "2024-09-10 09:30:00", "observaciones" => "Prueba de resistencia."],
            ["juego_id" => 8, "tecnico_rut" => "12345678-9", "fecha" => "2024-09-11 15:00:00", "observaciones" => "Verificación de sistemas eléctricos."],
            ["juego_id" => 4, "tecnico_rut" => "11234567-8", "fecha" => "2024-09-12 13:45:00", "observaciones" => "Ajuste de estructuras."],
            ["juego_id" => 9, "tecnico_rut" => "15678910-3", "fecha" => "2024-09-13 10:00:00", "observaciones" => "Revisión de seguridad."],
            ["juego_id" => 5, "tecnico_rut" => "20123456-0", "fecha" => "2024-09-14 11:30:00", "observaciones" => "Limpieza de filtros."],
            ["juego_id" => 3, "tecnico_rut" => "19876543-2", "fecha" => "2024-09-15 09:15:00", "observaciones" => "Cambio de aceite."],
            ["juego_id" => 10, "tecnico_rut" => "97654321-1", "fecha" => "2024-09-16 14:45:00", "observaciones" => "Revisión de barandillas."],
            ["juego_id" => 6, "tecnico_rut" => "5678901-6", "fecha" => "2024-09-17 12:00:00", "observaciones" => "Chequeo de seguridad."],
            ["juego_id" => 7, "tecnico_rut" => "2321098-7", "fecha" => "2024-09-18 11:15:00", "observaciones" => "Prueba de rendimiento."],
            ["juego_id" => 8, "tecnico_rut" => "22432109-8", "fecha" => "2024-09-19 10:30:00", "observaciones" => "Inspección de frenos."],
            ["juego_id" => 9, "tecnico_rut" => "23654321-0", "fecha" => "2024-09-20 14:00:00", "observaciones" => "Ajustes de seguridad."],
            ["juego_id" => 10, "tecnico_rut" => "12345678-9", "fecha" => "2024-09-21 12:30:00", "observaciones" => "Revisión de motores."],
            ["juego_id" => 3, "tecnico_rut" => "11234567-8", "fecha" => "2024-09-22 09:45:00", "observaciones" => "Cambio de piezas."],
            ["juego_id" => 1, "tecnico_rut" => "15678910-3", "fecha" => "2024-09-23 10:15:00", "observaciones" => "Revisión general."],
            ["juego_id" => 4, "tecnico_rut" => "20123456-0", "fecha" => "2024-09-24 11:30:00", "observaciones" => "Limpieza de filtros."],
            ["juego_id" => 5, "tecnico_rut" => "19876543-2", "fecha" => "2024-09-25 14:00:00", "observaciones" => "Verificación de seguridad."],
            ["juego_id" => 2, "tecnico_rut" => "97654321-1", "fecha" => "2024-09-26 09:30:00", "observaciones" => "Reparación de tuberías."],
            ["juego_id" => 6, "tecnico_rut" => "5678901-6", "fecha" => "2024-09-27 12:00:00", "observaciones" => "Prueba de resistencia."],
            ["juego_id" => 10, "tecnico_rut" => "2321098-7", "fecha" => "2024-09-28 11:15:00", "observaciones" => "Ajuste de estructuras."],
            ["juego_id" => 7, "tecnico_rut" => "22432109-8", "fecha" => "2024-09-29 10:00:00", "observaciones" => "Inspección de seguridad."],
            ["juego_id" => 9, "tecnico_rut" => "23654321-0", "fecha" => "2024-09-30 14:45:00", "observaciones" => "Revisión de barandillas."]
        ]);
    }
}
