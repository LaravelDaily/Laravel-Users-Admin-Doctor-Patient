<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'administrator'],
            ['name' => 'doctor'],
            ['name' => 'patient']
        ];

        Role::insert($roles);
    }
}
