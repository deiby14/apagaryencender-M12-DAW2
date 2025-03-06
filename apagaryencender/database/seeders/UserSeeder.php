<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Usuario administrador
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1, // administrador
            'sede_id' => 1  // Barcelona
        ]);

        // Crear algunos usuarios de prueba para cada rol
        foreach (range(1, 3) as $i) {
            User::create([
                'name' => "Cliente $i",
                'email' => "cliente$i@example.com",
                'password' => Hash::make('password'),
                'role_id' => 2, // cliente
                'sede_id' => rand(1, 4)
            ]);

            User::create([
                'name' => "Gestor $i",
                'email' => "gestor$i@example.com",
                'password' => Hash::make('password'),
                'role_id' => 3, // gestor
                'sede_id' => rand(1, 4)
            ]);

            User::create([
                'name' => "Técnico $i",
                'email' => "tecnico$i@example.com",
                'password' => Hash::make('password'),
                'role_id' => 4, // técnico
                'sede_id' => rand(1, 4)
            ]);
        }
    }
}