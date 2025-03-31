<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Airport>
 */
class AirportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->city . ' International Airport',
            'ICAO_code' => strtoupper($this->faker->lexify('????')), // 4-letter ICAO code
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'runways' => $this->faker->numberBetween(1200, 5000), // Runway length in meters
            'comment' => $this->faker->optional()->sentence,
        ];
    }
}
