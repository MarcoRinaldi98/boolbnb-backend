<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Service;
use App\Models\Sponsorship;
use App\Models\User;
use Carbon\Carbon;
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
        $user = User::where('email', 'test@test.it')->frist();

        $addresses = [
            [
                'address' => 'Via di Porta Tenaglia 7, 20121 Milano',
                'coordinates' => [45.47755652, 9.18146786]
            ],
            [
                'address' => 'Via dei Chiostri 1, 20121 Milano',
                'coordinates' => [45.47407891, 9.18665739]
            ],
            [
                'address' => 'Piazza Napoli 19, 20146 Milano',
                'coordinates' => [45.4530508, 9.15473502]
            ],
            [
                'address' => 'Via 4 Novembre 29, 20004 Arluno',
                'coordinates' => [45.50326101, 8.94720878]
            ],
            [
                'address' => 'Cascina Conterico 18, 20067 Paullo',
                'coordinates' => [45.43668337, 9.40817037]
            ],
            [
                'address' => 'Via Guzzina 9, 20861 Brugherio',
                'coordinates' => [45.54071668, 9.29466799]
            ],
            [
                'address' => 'Via Quindici Martiri 2/23, 20055 Vimodrone',
                'coordinates' => [45.5096724, 9.28240405]
            ],
            [
                'address' => 'Piazza Leonardo da Vinci 36, 20133 Milano',
                'coordinates' => [45.47826048, 9.22690155]
            ]
        ];

        for ($i = 0; $i < count($addresses); $i++) {

            $visibility = true;
            if ($i === 0) {
                $visibility = false;
            }

            $apartment = Apartment::factory()
                ->for($user)
                ->setCoordinates($addresses[$i]["coordinates"])
                ->hasAttached(Service::inRandomOrder()->limit(rand(1, 5))->get())
                ->setVisibility($visibility)
                ->create([
                    "address" => $addresses[$i]["address"]
                ]);

            if ($i === 1) {
                $sponsorship = Sponsorship::where('id', 1)->frist();
                $now = Carbon::now()->timezone('Europe/Rome');
                $now->add($sponsorship->duration)->subWeek();
                $apartment->sponsorships()->attach($sponsorship, ['expire_date' => $now->toDateTime()]);
            }

            if ($i === 2) {
                $sponsorship = Sponsorship::where('id', 2)->frist();
                $apartment->sponsorships()->attach($sponsorship, ['expire_date' => $sponsorship->getExpireDateFromNow()]);
            }

            if ($i === 3) {
                $apartment->delete();
            }
        }
    }
}
