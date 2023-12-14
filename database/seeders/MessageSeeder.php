<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = Apartment::inRandomOrder()->get();

        $apartments->each(function ($apartment, $key) {
            if ($key > 0) {
                Message::factory(rand(1, 3))
                    ->for($apartment)
                    ->create();
            }
        });
    }
}
