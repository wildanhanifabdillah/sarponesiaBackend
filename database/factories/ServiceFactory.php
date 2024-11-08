<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
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
            'Price' => $this->faker->randomFloat(2, 50, 500),
            'Category_ID' => \App\Models\Category::where('category_type', 'service')->inRandomOrder()->first()->Category_ID,
        ];
    }
}
