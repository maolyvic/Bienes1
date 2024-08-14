<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla bienes
            'ver-bien',
            'crear-bien',
            'editar-bien',
            'borrar-bien',

        ];
        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso, 'guard_name' => 'web']); // Agregué 'guard_name' => 'web'
        }
    }
}
