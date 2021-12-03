<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rooms;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rooms::create([
            'roomnumber' => '101',
            // 'roomtype_id' => '1',
        ]);

        Rooms::create([
            'roomnumber' => '102',
            // 'roomtype_id' => '2',
        ]);

        Rooms::create([
            'roomnumber' => '103',
            // 'roomtype_id' => '3',
        ]);

        Rooms::create([
            'roomnumber' => '104',
            // 'roomtype_id' => '4',
        ]);
    }
}
