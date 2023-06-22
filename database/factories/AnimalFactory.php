<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->word(),
            'habitat' => $this->faker->sentence(),
            'rare' => $this->faker->boolean(),
            'count_in_zoo' => $this->faker->numberBetween(1, 100),
            'favourite_food' => $this->faker->word()
        ];
    }
}