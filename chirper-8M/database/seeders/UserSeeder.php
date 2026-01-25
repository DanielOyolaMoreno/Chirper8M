<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $usuarios = [
            ['name' => 'Alberto García', 'email' => 'alberto@example.com', 'password' => 'password'],
            ['name' => 'Sofía López', 'email' => 'sofia@example.com', 'password' => 'password123'],
            ['name' => 'Miguel Fernández', 'email' => 'miguel@example.com', 'password' => '12345678'],
            ['name' => 'Laura Martínez', 'email' => 'laura@example.com', 'password' => 'larau123'],
        ];

        foreach ($usuarios as $usuario) {
            User::updateOrCreate(
                ['email' => $usuario['email']],
                [
                    'name' => $usuario['name'],
                    'email' => $usuario['email'],
                    'password' => Hash::make($usuario['password']),
                ]
            );
        }
    }
}
