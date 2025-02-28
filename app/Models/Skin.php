<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skin extends Model
{
    public function personaje()
    {
        return $this->belongsTo(Personaje::class);  // Relación N a 1 (un skin pertenece a un personaje)
    }

    //
}
