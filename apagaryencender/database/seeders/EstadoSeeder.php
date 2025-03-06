<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    public function run(): void
    {
        $estados = [
            ['nombre' => 'Sin asignar'],
            ['nombre' => 'Asignada'],
            ['nombre' => 'En trabajo'],
            ['nombre' => 'Resuelta'],
            ['nombre' => 'Cerrada']
        ];

        foreach ($estados as $estado) {
            Estado::create($estado);
        }
    }
}