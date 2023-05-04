<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->words(3, true),
            'company' => fake()->randomElement(['apple', 'samsung']),
            'model' => fake()->word(),
            'description' => fake()->paragraph(),
            'condition' => fake()->randomElement(['new', 'used']),
            'age' => fake()->numberBetween(1, 10),
            'min_price' => fake()->numberBetween(100, 1000),
            'max_price' => fake()->numberBetween(1000, 10000),
            'end_time' => fake()->dateTimeBetween('+1 day', '+1 week'),
            'is_active' => fake()->boolean(80),
            'image' => fake()->imageUrl(),
            'user_id' => fake()->randomElement([1, 2, 3]),
        ];
    }
}
