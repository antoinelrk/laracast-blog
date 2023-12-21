<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Traits\FakerTrait;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    use FakerTrait;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $postName = $this->faker->sentence(4);

        return [
            'user_id' => rand(1, User::count()),
            'category_id' => rand(1, Category::count()),
            'title' => $postName,
            'slug' => Str::slug($postName),
            'excerpt' => $this->formatParagraphs($this->faker->paragraphs(rand(1, 2))),
            'body' => $this->formatParagraphs($this->faker->paragraphs(rand(4, 10))),
        ];
    }
}
