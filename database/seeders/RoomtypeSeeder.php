<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roomtype;

class RoomtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roomtype::create([
            'picture' => '/picture/honeymoon_room.png',
            'roomtype' => 'Honeymoon',
            'maxperson' => '4',
            'price_per_night' => '2000',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam quos eius impedit inventore in quas excepturi, fugit ex ipsa exercitationem.',
        ]);

        Roomtype::create([
            'picture' => '/picture/private_room.jpg',
            'roomtype' => 'Private',
            'maxperson' => '2',
            'price_per_night' => '1500',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam quos eius impedit inventore in quas excepturi, fugit ex ipsa exercitationem.',
        ]);

        Roomtype::create([
            'picture' => '/picture/bigsize_room.jpg',
            'roomtype' => 'Bigsize',
            'maxperson' => '6',
            'price_per_night' => '1000',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam quos eius impedit inventore in quas excepturi, fugit ex ipsa exercitationem.',
        ]);

        Roomtype::create([
            'picture' => '/picture/normal_room.jpg',
            'roomtype' => 'Normal',
            'maxperson' => '3',
            'price_per_night' => '650',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam quos eius impedit inventore in quas excepturi, fugit ex ipsa exercitationem.',
        ]);
    }
}
