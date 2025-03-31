<?php

namespace Database\Factories;

use App\Models\Aircraft;
use App\Models\Airline;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Airport;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flights>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departure_airport = Airport::inRandomOrder()->first() ?? Airport::factory()->create();
        $arrival_airport = Airport::where('id', '!=', $departure_airport->id)->inRandomOrder()->first() ?? Airport::factory()->create();
        $aircraft = Aircraft::inRandomOrder()->first() ?? Aircraft::factory()->create();
        $airline = Airline::inRandomOrder()->first() ?? Airline::factory()->create();

        return [
            'user_id' => User::factory(),
            'flight_number' => strtoupper($this->faker->bothify('??###')),
            'dpt_time' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'arr_time' => $this->faker->dateTimeBetween('now', '+1 month'),
            'fuel_lbs' => $this->faker->numberBetween(10000, 200000),
            'flight_route' => $this->faker->numberBetween(1, 50), // Adjust based on routes table
            'aircraft' => $aircraft->id,
            'airline' => $airline->id,
            'from' => $departure_airport->icao_code, // Fetch ICAO code from an existing airport
            'to' => $arrival_airport->icao_code, // Fetch a different ICAO code for destination
            'gross_revenue' => $this->faker->numberBetween(50000, 500000),
            'landing_rate' => $this->faker->numberBetween(-700, -50), // Measured in fpm (feet per minute)
            'passenger_no' => $this->faker->numberBetween(50, 400),
        ];
    }
}
