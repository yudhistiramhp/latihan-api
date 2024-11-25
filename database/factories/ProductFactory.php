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
            'name' => $this->faker->word,
            'category_id' => $this->faker->numberBetween(1, 5),
            'brand_id' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->randomFloat(10000, 100000),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}
