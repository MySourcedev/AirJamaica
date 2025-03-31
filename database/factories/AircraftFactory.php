<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aircraft>
 */
class AircraftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => $this->faker->randomElement(['Boeing 737', 'Airbus A320', 'Boeing 777', 'Airbus A380']),
            'registration' => strtoupper($this->faker->bothify('??-####')),
            'ICAO_code' => strtoupper($this->faker->lexify('???')),
            'max_pax' => $this->faker->numberBetween(100,250),
            'max_cargo' => $this->faker->numberBetween(400,800),
            'comment' => $this->faker->optional()->sentence,
        ];
    }
}
