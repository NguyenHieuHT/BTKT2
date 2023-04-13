<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Airplane>
 */
class AirplaneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'registration_number' =>fake()-> unique()->numberBetween(1000,10000),
            'model_number' =>fake()->numberBetween(1000,10000),
            'capacity' =>fake()->numberBetween(1000,10000),
        ];
    }
}
