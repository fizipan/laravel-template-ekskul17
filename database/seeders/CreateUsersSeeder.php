<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User Random Data
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'johndue@mail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedue@mail.com',
                'password' => bcrypt('password'),
            ],
        ];

        // Insert Data
        User::insert($users);
    }
}
