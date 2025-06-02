<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BusRoute;

class RouteSeeder extends Seeder
{
    public function run(): void
    {
        BusRoute::create([
            'nombre' => 'Ruta 101',
            'punto_inicio' => 'Estación Central',
            'punto_fin' => 'Plaza Norte',
            'distancia_km' => 12.5,
            'tiempo_estimado' => '00:45:00',
        ]);

        BusRoute::create([
            'nombre' => 'Ruta 202',
            'punto_inicio' => 'Villa El Salvador',
            'punto_fin' => 'Comas',
            'distancia_km' => 22.0,
            'tiempo_estimado' => '01:15:00',
        ]);
    }
}
