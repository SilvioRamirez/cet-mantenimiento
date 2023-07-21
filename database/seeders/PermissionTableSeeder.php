<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'depen-list',
            'depen-create',
            'depen-edit',
            'depend-delete',
            'empleado-list',
            'empleado-create',
            'empleado-edit',
            'empleado-delete',
            'hardware-list',
            'hardware-create',
            'hardware-edit',
            'hardware-delete',
            'hardwarecalendario-list',
            'hardwarecalendario-create',
            'hardwarecalendario-edit',
            'hardwarecalendario-delete',
            'software-list',
            'software-create',
            'software-edit',
            'software-delete',
            'softwarecalendario-list',
            'softwarecalendario-create',
            'softwarecalendario-edit',
            'softwarecalendario-delete',
            'informe-list',
            'informe-create',
            'informe-edit',
            'informe-delete'
         ];
         
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
