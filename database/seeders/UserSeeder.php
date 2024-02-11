<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $user = [
            'name' => 'Dazmi',
            'email' => 'ponpesdaarulazmiofficial@gmail.com',
            'password' => \bcrypt('Dazmi2023')
        ];

        User::insert($user);
    }
}
