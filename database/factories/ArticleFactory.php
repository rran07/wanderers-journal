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
            'title' => fake()->title(),
            'vlog_overview' => fake()->sentences(1),
            'description' => fake()->paragraphs(3, true),
            'author' => fake()->name(),
            'published' => fake()->date('Y-m-d'),
            'profile_image' => url('https://placehold.co/50x50'),
        ];
    }
}
