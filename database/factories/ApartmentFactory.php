<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartment>
 */
class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->text(100),
            'rooms' => fake()->numberBetween(1, 5),
            'beds' => fake()->numberBetween(1, 4),
            'bathrooms' => fake()->numberBetween(1, 2),
            'mq' => fake()->numberBetween(35, 70),
            'address' => fake()->address(),
            'lat' => fake()->latitude(45.2, 45.5),
            'lon' => fake()->longitude(8.8, 9.3),
            'photo' => NULL,
            'visible' => true
        ];
    }

    public function setVisibility($visibility)
    {
        return $this->state(function (array $attributes) use ($visibility) {
            return [
                'visible' => $visibility
            ];
        });
    }

    public function setCoordinates($lat_lon)
    {
        return $this->state(function (array $attributes) use ($lat_lon) {
            return [
                'latitude' => $lat_lon[0],
                'longitude' => $lat_lon[1]
            ];
        });
    }
}
