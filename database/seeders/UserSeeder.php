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
    public function run()
    {
        User::create([
            'name' => 'administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'pimpinan',
            'email' => 'pimpinan@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 2
        ]);

        User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 3
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 3
        ]);
    }
}
