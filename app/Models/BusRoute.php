<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;

    protected $table = 'bus_routes'; // <-- AÑADE ESTO por seguridad
    protected $fillable = [
        'nombre',
        'punto_inicio',
        'punto_fin',
        'distancia_km',
        'tiempo_estimado'
    ];
}

