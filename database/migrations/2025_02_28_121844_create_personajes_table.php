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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');        // El nombre del personaje
            $table->enum('tipo', ['rango', 'melee']); // Tipo del personaje (rango o melee)
            $table->string('categoria');    // Categoría del personaje (por ejemplo, "luchador")
            $table->integer('vida');       // Vida del personaje
            $table->boolean('hipercarga'); // Si tiene o no hipercarga
            $table->timestamps();          // Esto es para las fechas de creación y actualización
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};
