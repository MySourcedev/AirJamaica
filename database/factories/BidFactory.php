<?php

namespace Database\Factories;

use App\Models\Aircraft;
use App\Models\Flights;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bids>
 */
class BidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::inRandomOrder()->first()->id,
            "flight_id" => Flights::inRandomOrder()->first()->id,
            "aircraft_id" => Aircraft::inRandomOrder()->first()->id,
        ];
    }
}
