<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create role Admin
        $roleAdmin = Role::create(['name' => 'admin']);
        $permissionAdmin = Permission::create(['name' => 'all']);
        $roleAdmin->givePermissionTo($permissionAdmin);

        //create role user
        $roleUser = Role::create(['name' => 'user']);
        $permissionUser = Permission::create(['name' => 'manage project']);
        $roleUser->givePermissionTo($permissionUser);
    }
}
