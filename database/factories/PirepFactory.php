<?php

namespace Database\Factories;

use App\Models\Aircraft;
use App\Models\Airport;
use App\Models\Airline;
use App\Models\Flights;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pirep>
 */
class PirepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departure_airport = Airport::inRandomOrder()->first() ?? Airport::factory()->create();

        // Select or create an arrival airport that is different from departure
        $arrival_airport = Airport::where('id', '!=', $departure_airport->id)->inRandomOrder()->first() ?? Airport::factory()->create();

        return [
            'pilot' => $this->faker->name,
            'aircraft_id' => Aircraft::inRandomOrder()->first()?->id ?? Aircraft::factory()->create()->id,
            'airline_id' => Airline::inRandomOrder()->first()?->id ?? Airline::factory()->create()->id,
            'flights_id' => Flights::inRandomOrder()->first()?->id ?? Flights::factory()->create()->id,
            'dpt_airport' => $departure_airport->id, // Departure airport ID
            'arr_airport' => $arrival_airport->id,   // Arrival airport ID
            'comment' => $this->faker->sentence(10),
        ];
    }
}
