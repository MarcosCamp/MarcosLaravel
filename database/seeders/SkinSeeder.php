<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skin;
use App\Models\Personaje;

class SkinSeeder extends Seeder
{
    public function run()
    {
        // Encontrar un personaje
        $personaje = Personaje::first(); // Obtiene el primer personaje, si ya existe alguno

        // Crear skins para ese personaje
        if ($personaje) {
            $personaje->skins()->create([
                'nombre' => 'Tropical Shelly'
            ]);

            $personaje->skins()->create([
                'nombre' => 'Vaquero Colt'
            ]);
        }
    }
}
