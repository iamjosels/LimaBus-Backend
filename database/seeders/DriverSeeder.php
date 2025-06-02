<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    public function run(): void
    {
        Driver::create([
            'nombres' => 'Carlos Pérez',
            'dni' => '12345678',
            'telefono' => '987654321',
            'bus_id' => 1,
        ]);

        Driver::create([
            'nombres' => 'Luis Gonzales',
            'dni' => '87654321',
            'telefono' => '912345678',
            'bus_id' => 2,
        ]);
    }
}

