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
        $myServices = [
            [
                'name' => 'Wi-Fi'
            ],
            [
                'name' => 'Posto Macchina'
            ],
            [
                'name' => 'Piscina'
            ],
            [
                'name' => 'Portineria'
            ],
            [
                'name' => 'Sauna'
            ],
            [
                'name' => 'Vista Mare'
            ]
        ];
        foreach ($myServices as $service) {

            $newService = new Service();
            $newService->name = $service['name'];

            $newService->save();
        }
    }
}
