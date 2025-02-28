<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personaje;

class PersonajeSeeder extends Seeder
{
    public function run()
    {
        // Agregar un personaje de ejemplo
        Personaje::create([
            'nombre' => 'Shelly',
            'tipo' => 'rango',
            'categoria' => 'Especial',
            'vida' => 3000,
            'hipercarga' => true,
        ]);

        Personaje::create([
            'nombre' => 'Colt',
            'tipo' => 'rango',
            'categoria' => 'Especial',
            'vida' => 3200,
            'hipercarga' => false,
        ]);
    }
}
