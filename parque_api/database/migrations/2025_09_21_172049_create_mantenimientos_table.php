<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->text('observaciones');
            $table->unsignedBigInteger('juego_id');
            $table->string('tecnico_rut',10);     
            //$table->timestamps();
            $table->foreign('juego_id')->references('id')->on('juegos');
            $table->foreign('tecnico_rut')->references('rut')->on('tecnicos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mantenimientos');
    }
};
