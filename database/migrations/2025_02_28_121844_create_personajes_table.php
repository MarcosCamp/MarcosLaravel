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
                $table->string('nombre');
                $table->string('tipo'); // rango, melee
                $table->string('categoria');
                $table->integer('vida');
                $table->boolean('hipercarga')->default(false);
                $table->timestamps();
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
