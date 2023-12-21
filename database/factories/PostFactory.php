<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
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
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
        ];
    }
}
