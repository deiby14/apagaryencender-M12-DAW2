<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['nombre' => 'administrador'],
            ['nombre' => 'gestor'],
            ['nombre' => 'tecnico'],
            ['nombre' => 'cliente']
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}