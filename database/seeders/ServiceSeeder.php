<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'breakfast',
        ]);

        Service::create([
            'name' => 'dinner',
        ]);

        Service::create([
            'name' => 'massage',
        ]);

        Service::create([
            'name' => 'rent a care',
        ]);
    }
}
