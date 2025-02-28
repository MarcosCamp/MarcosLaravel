<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    public function skins()
    {
        return $this->hasMany(Skin::class);  // Relación 1 a N (un personaje tiene muchos skins)
    }

}
