<?php

namespace Database\Seeders;

use App\Models\Sede;
use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
{
    public function run(): void
    {
        $sedes = [
            [
                'nombre' => 'Barcelona',
                'direccion' => 'Carrer de Balmes 123',
                'ciudad' => 'Barcelona'
            ],
            [
                'nombre' => 'Berlín',
                'direccion' => 'Friedrichstraße 123',
                'ciudad' => 'Berlín'
            ],
            [
                'nombre' => 'Montreal',
                'direccion' => 'Rue Saint-Catherine 123',
                'ciudad' => 'Montreal'
            ]
        ];

        foreach ($sedes as $sede) {
            Sede::create($sede);
        }
    }
}