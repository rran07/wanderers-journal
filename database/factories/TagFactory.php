<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
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
