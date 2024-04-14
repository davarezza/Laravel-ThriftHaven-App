<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Dava Rezza',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Seller',
                'email' => 'seller@gmail.com',
                'role' => 'seller',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Suwanti Puji',
                'email' => 'swan@gmail.com',
                'role' => 'customer',
                'password' => bcrypt('123'),
            ],
        ];

        foreach ($userData as $data) {
            User::create($data);
        }
    }
}
