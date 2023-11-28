<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $myApartments = [
            [
                'name' => 'Appartamento Roma',
                'rooms' => '4',
                'beds' => '2',
                'bathrooms' => '2',
                'mq' => '60',
                'address' => 'Via Roma 16',
                'lat' => '41.89332',
                'lon' => '12.482932',
                'photo' => 'https://picsum.photos/200/300',
                'visible' => true,
                'slug' => 'appartamento-roma'
            ],
            [
                'name' => 'Appartamento Torino',
                'rooms' => '3',
                'beds' => '1',
                'bathrooms' => '1',
                'mq' => '35',
                'address' => 'Via Torino 21',
                'lat' => '45.067755',
                'lon' => '7.682489',
                'photo' => 'https://picsum.photos/200/300',
                'visible' => true,
                'slug' => 'appartamento-torino'
            ],
            [
                'name' => 'Appartamento Napoli',
                'rooms' => '4',
                'beds' => '2',
                'bathrooms' => '1',
                'mq' => '45',
                'address' => 'Via Napoli 43',
                'lat' => '40.835885',
                'lon' => '14.248768',
                'photo' => 'https://picsum.photos/200/300',
                'visible' => true,
                'slug' => 'appartamento-napoli'
            ],
            [
                'name' => 'Appartamento Milano',
                'rooms' => '3',
                'beds' => '2',
                'bathrooms' => '1',
                'mq' => '40',
                'address' => 'Via Milano 47',
                'lat' => '45.464194',
                'lon' => '9.189635',
                'photo' => 'https://picsum.photos/200/300',
                'visible' => true,
                'slug' => 'appartamento-milano'
            ],
            [
                'name' => 'Appartamento Calabria',
                'rooms' => '6',
                'beds' => '3',
                'bathrooms' => '2',
                'mq' => '65',
                'address' => 'Via Calabria 13',
                'lat' => '39.056597',
                'lon' => '16.524986',
                'photo' => 'https://picsum.photos/200/300',
                'visible' => true,
                'slug' => 'appartamento-calabria'
            ]
        ];

        foreach ($myApartments as $appartment) {
            $newApartment = new Apartment();
            $newApartment->name = $appartment['name'];
            $newApartment->rooms = $appartment['rooms'];
            $newApartment->beds = $appartment['beds'];
            $newApartment->bathrooms = $appartment['bathrooms'];
            $newApartment->mq = $appartment['mq'];
            $newApartment->address = $appartment['address'];
            $newApartment->lat = $appartment['lat'];
            $newApartment->lon = $appartment['lon'];
            $newApartment->photo = $appartment['photo'];
            $newApartment->visible = $appartment['visible'];
            $newApartment->slug = $appartment['slug'];

            $newApartment->save();
        }
    }
}
