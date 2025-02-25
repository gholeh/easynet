<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'admin',
            'email' => 'admin@easynet.net',
            'password' => Hash::make('admin'),
            'role' => 'admin', // Assuming there's a role column in your users table
        ]);
    }
}

