<?php

namespace Database\Seeders;

use Customer;
use Furniture;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Userseeder::class,
            CustomerSeeder::class,
            RoomtypeSeeder::class,
            RoomsSeeder::class,
            BookingSeeder::class,
            ServiceSeeder::class
        ]);
    }
}
