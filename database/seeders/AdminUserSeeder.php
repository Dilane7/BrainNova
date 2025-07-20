<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Dilane TIWA',
            'email' => 'tsaguedilane7.com',
            'password' => Hash::make('BrainNova'), // Changez ce mot de passe !
        ]);

        User::create([
            'name' => 'Marcel YAMI',
            'email' => 'yamitmarcel@gmail.com',
            'password' => Hash::make('BrainNova'), // Changez ce mot de passe !
        ]);
    }
}