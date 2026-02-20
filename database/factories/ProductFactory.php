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
    public function definition(): array
    {
        return [
            'title' => fake()->words(2, true),
            'description' => fake()->sentence(),
            'base_price' => fake()->randomFloat(2, 1, 100),
            'category' => fake()->randomElement(['shirt', 'mug']),
        ];
    }

    public function shirt(): static
    {
        return $this->state(fn (array $attributes) => [
            'category' => 'shirt',
        ]);
    }

    public function mug(): static
    {
        return $this->state(fn (array $attributes) => [
            'category' => 'mug',
        ]);
    }
}
