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
            'depend-list',
            'depend-create',
            'depend-edit',
            'depend-delete',
            'hardware-list',
            'hardware-create',
            'hardware-edit',
            'hardware-delete',
            'hardware-download',
            'hardwarecalendario-list',
            'hardwarecalendario-create',
            'hardwarecalendario-edit',
            'hardwarecalendario-delete',
            'software-list',
            'software-create',
            'software-edit',
            'software-delete',
            'software-download',
            'softwarecalendario-list',
            'softwarecalendario-create',
            'softwarecalendario-edit',
            'softwarecalendario-delete',
            'informe-list',
            'informe-create',
            'informe-edit',
            'informe-delete',
            'informe-download'
         ];
         
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
