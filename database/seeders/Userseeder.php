<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role' => 'ADMIN',
            'email' => 'pongpol_promma@cmu.ac.th',
            'password' => bcrypt('1234')
        ]);

        User::create([
            'role' => 'USER',
            'email' => 'sirawit@cmu.ac.th',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'role' => 'USER',
            'email' => 'athikom@cmu.ac.th',
            'password' => bcrypt('123456')
        ]);
    }
}
