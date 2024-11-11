<?php

namespace Database\Factories;

use App\Models\Tag;
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
            'tag_id' => Tag::factory(),
            'title' => fake()->sentences(1, true),
            'vlog_overview' => fake()->sentences(1, true),
            'description' => fake()->paragraphs(10, true),
            'author' => fake()->name(),
            'published' => fake()->date('Y-m-d'),
            'profile_image' => url('https://placehold.co/50x50'),
        ];
    }
}
