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
            'Name' => $this->faker->word(),
            'Description' => $this->faker->sentence(),
            'Price' => $this->faker->randomFloat(2, 5, 100),
            'Stock' => $this->faker->numberBetween(1, 100),
            'Category_ID' => \App\Models\Category::where('category_type', 'product')->inRandomOrder()->first()->Category_ID,
            'Image_url' => $this->faker->imageUrl(),
        ];
    }
}
