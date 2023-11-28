<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mySponsorships = [
            [
                'name' => 'Bronze',
                'price' => 2.99,
                'duration' => 24
            ],
            [
                'name' => 'Silver',
                'price' => 5.99,
                'duration' => 72
            ],
            [
                'name' => 'Gold',
                'price' => 9.99,
                'duration' => 144
            ]
        ];
        foreach ($mySponsorships as $sponsorship) {

            $newSponsorship = new Sponsorship();
            $newSponsorship->name = $sponsorship['name'];
            $newSponsorship->price = $sponsorship['price'];
            $newSponsorship->duration = $sponsorship['duration'];

            $newSponsorship->save();
        }
    }
}
