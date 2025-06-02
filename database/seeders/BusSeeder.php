<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bus;

class BusSeeder extends Seeder
{
    public function run(): void
    {
        Bus::create([
            'placa' => 'ABC123',
            'modelo' => 'Mercedes-Benz 2020',
            'capacidad' => 50,
            'bus_route_id' => 1,
        ]);

        Bus::create([
            'placa' => 'XYZ789',
            'modelo' => 'Volvo 2018',
            'capacidad' => 45,
            'bus_route_id' => 2,
        ]);
    }
}
