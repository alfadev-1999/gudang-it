<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'name' => 'department.view',
            'guard_name' => 'web',
        ]);

        Permission::firstOrCreate([
            'name' => 'department.create',
            'guard_name' => 'web',
        ]);

        Permission::firstOrCreate([
            'name' => 'department.edit',
            'guard_name' => 'web',
        ]);

        Permission::firstOrCreate([
            'name' => 'department.delete',
            'guard_name' => 'web',
        ]);
    }
}