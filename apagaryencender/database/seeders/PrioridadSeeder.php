<?php

namespace Database\Seeders;

use App\Models\Prioridad;
use Illuminate\Database\Seeder;

class PrioridadSeeder extends Seeder
{
    public function run(): void
    {
        $prioridades = [
            ['nombre' => 'Alta'],  // Asegúrate de que los valores estén entre comillas
            ['nombre' => 'Media'],
            ['nombre' => 'Baja']
        ];

        foreach ($prioridades as $prioridad) {
            Prioridad::create($prioridad);
        }
    }
}