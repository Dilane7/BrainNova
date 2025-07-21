<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'tsaguedilane7@gmail.com'],
            [
                'name' => 'Dilane TIWA',
                'password' => Hash::make('BrainNova'), // Changez ce mot de passe !
            ]
        );

        User::updateOrCreate(
            ['email' => 'yamitmarcel@gmail.com'],
            [
                'name' => 'Marcel YAMI',
                'password' => Hash::make('BrainNova'), // Changez ce mot de passe !
            ]
        );
    }
}