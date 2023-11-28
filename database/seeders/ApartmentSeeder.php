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
                'address' => 'Via di Porta Tenaglia 7, 20121 Milano',
                'lat' => '45.47755652',
                'lon' => '9.18146786',
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
                'address' => 'Via dei Chiostri 1, 20121 Milano',
                'lat' => '45.47407891',
                'lon' => '9.18665739',
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
                'address' => 'Piazza Napoli 19, 20146 Milano',
                'lat' => '45.4530508',
                'lon' => '9.15473502',
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
                'address' => 'Via 4 Novembre 29, 20004 Arluno',
                'lat' => '45.50326101',
                'lon' => '8.94720878',
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
                'address' => 'Cascina Conterico 18, 20067 Paullo',
                'lat' => '45.43668337',
                'lon' => '9.40817037',
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
