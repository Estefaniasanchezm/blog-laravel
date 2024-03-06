<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Estefania Sanchez',
                'email' => 'faber_62@hotmail.com',
                'password' => bcrypt(1234568)
            ]
        );
        User::factory(99)->create();
    }
}
