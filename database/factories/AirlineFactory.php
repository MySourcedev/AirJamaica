<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Airport>
 */
class AirlineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'ICAO' => strtoupper($this->faker->lexify('???')),
            'Call Sign' => $this->faker->word,
            'Country' => $this->faker->country,
            'comment' => $this->faker->optional()->sentence,
        ];
    }
}
