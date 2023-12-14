<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $services = [
            'Wi-Fi',
            'Hot tub',
            'EV charging space',
            'Pet sittting',
            'Kitchen',
            'Washing machine',
            'A/C',
            'Free parking'
        ];

        foreach ($services as $key => $value) {

            Service::factory()->create([
                'name' => $value
            ]);
        }
    }
}
