<?php

namespace Database\Factories;

use App\Models\Sensor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sensor>
 */
class SensorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Sensor::class;
    public function definition(): array
    {
        return [
            //
            'slave' => fake()->randomElement(['S1', 'S2']),
            'sensor' => fake()->numberBetween(1, 100),
            'rssi' => fake()->numberBetween(-100, 0),
        ];
    }
}
