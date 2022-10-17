<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Rodrigo Alves Do Espirito Santo',
            'email' => 'rodrigoaes.20@hotmail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
