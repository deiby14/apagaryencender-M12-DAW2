<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\SedeSeeder;
use Database\Seeders\EstadoSeeder;
use Database\Seeders\PrioridadSeeder;
use Database\Seeders\CategoriaSeeder;
use Database\Seeders\UserSeeder;    

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            SedeSeeder::class,
            EstadoSeeder::class,
            PrioridadSeeder::class,
            CategoriaSeeder::class,
            UserSeeder::class,
        ]);
    }
}