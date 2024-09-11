<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $ownerRole = Role::create([
             'name' => 'owner'
        ]);

        $admin = Role::create([
            'name' => 'admin'
        ]);

        $userOwner = User::create([
            'name' => 'Jas Hujan Indonesia',
           'email' => 'jashujanindonesiacom@gmail.com',
           'password' => bcrypt('Jashujanindonesia2024@')
        ]);

        $userOwner->assignRole($ownerRole); 
    }
}
