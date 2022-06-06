<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        //create user and assign role
        $listUser = User::factory(10)->create();
        foreach ($listUser as $user){
            $user->assignRole("user");
        }

        //create admin and assign role
        $admin = User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@everything.com',
         ]);
        $admin->assignRole("admin");
    }
}
