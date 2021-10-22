<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'test user',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role_id' => User::ROLE_ADMIN,
        ]);

        User::factory(100)->doctor()->create();

        User::factory(1000)->patient()->create();
    }
}
