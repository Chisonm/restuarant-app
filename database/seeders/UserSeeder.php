<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@email.com',
                'role' => 'admin',
               'password'=> bcrypt('password'),
            ],
            [
                'name'=>'Daniel',
                'email'=>'daniel@email.com',
                'role' => 'user',
               'password'=> bcrypt('password'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
