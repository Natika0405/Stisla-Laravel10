<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name' => 'Natika Savitha',
            'email' => 'natika@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1'),
        ]);
        
       
        User::create([
            'name' => 'Savitha',
            'email' => 'savitha@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678',
        ]);
    }
}
