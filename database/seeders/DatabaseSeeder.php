<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin987'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Staff',
            'email' => 'StaffLab@gmail.com',
            'password' => Hash::make('staffLab'),
            'role' => 'staff'
        ]);
    }
}
