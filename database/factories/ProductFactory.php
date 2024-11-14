<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            'Name' => $this->faker->word(),
            'Description' => $this->faker->sentence(),
            'Price' => $this->faker->randomFloat(2, 10000, 500000),
            'Stock' => $this->faker->numberBetween(1, 100),
            'Category_ID' => Category::where('category_type', 'product')->inRandomOrder()->first()->Category_ID,
        ];
    }
}
