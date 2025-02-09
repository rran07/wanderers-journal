<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'article_id' => Article::factory(),
            'genre' => fake()->randomElement([
                'Technology',
                'Lifestyle',
                'Comedy',
                'Travel',
                'Educational',
                'Fitness and Health',
                'Fashion and Beauty',
                'Food',
                'Cooking',
                'Gaming',
                'Art',
                'Music',
            ])
        ];
    }
}
