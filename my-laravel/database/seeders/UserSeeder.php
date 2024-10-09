<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
       
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password123'), 
        ]);

        User::factory(10)->create(); // Створення 10 випадкових користувачів (якщо налаштована фабрика)
    }
}
