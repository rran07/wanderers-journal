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
            'description' => fake()->paragraphs(5, true),
            'author' => fake()->name(),
            'published' => fake()->date($format = 'm-d-Y'),
            'profile_image' => url('https://placehold.co/50x50'),
        ];
    }
}
