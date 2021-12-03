<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'user_id' => '1',
            'first_name' => 'arm',
            'last_name' => 'pongpon',
            'address' => '154/1 lamphun',
            'phone_number' => '0954764827',
        ]);

        Customer::create([
            'user_id' => '2',
            'first_name' => 'fill',
            'last_name' => 'sirawit',
            'address' => '26 lamphun',
            'phone_number' => '0970257675',
        ]);

        Customer::create([
            'user_id' => '3',
            'first_name' => 'aom',
            'last_name' => 'Athikom',
            'address' => '16 lamphun',
            'phone_number' => '0998654567',
        ]);
    }
}
