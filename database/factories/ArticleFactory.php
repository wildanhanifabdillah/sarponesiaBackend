<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title' => $this->faker->sentence(),
            'Content' => $this->faker->paragraph(),
            'Category_ID' => \App\Models\Category::where('category_type', 'article')->inRandomOrder()->first()->Category_ID,
        ];
    }
}
