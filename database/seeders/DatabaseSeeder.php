<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (env('APP_ENV') === 'local') {
            // User::factory(50)->create();
            Category::factory(rand(1, 50))->create();
            // Post::factory(rand(200, 250))->create();
            // Comment::factory(rand(1000, 2000))->create();
        }
    }
}
