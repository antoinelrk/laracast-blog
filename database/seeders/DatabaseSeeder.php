<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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
        User::factory(5)->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'title' => 'My <strong>First</strong> Post',
            'slug' => Str::slug('My First Post'),
            'user_id' => rand(1, 5),
            'category_id' => $personal->id,
            'excerpt' => 'Lorem ipsum <strong>dolor</strong> sit amet.',
            'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]);

        Post::create([
            'title' => 'Laravel is <strong>Amazing</strong>',
            'slug' => Str::slug('Laravel is Amazing'),
            'user_id' => rand(1, 5),
            'category_id' => $work->id,
            'excerpt' => 'Lorem ipsum <strong>dolor</strong> sit amet.',
            'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]);

        Post::create([
            'title' => 'My <strong>Third</strong> Post',
            'slug' => Str::slug('My Third Post'),
            'user_id' => rand(1, 5),
            'category_id' => $personal->id,
            'excerpt' => 'Lorem ipsum <strong>dolor</strong> sit amet.',
            'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]);


        Post::create([
            'title' => 'Best Holiday is <u>Spring</u> !',
            'slug' => Str::slug('Best Holiday is Spring !'),
            'user_id' => rand(1, 5),
            'category_id' => $family->id,
            'excerpt' => 'Lorem ipsum <strong>dolor</strong> sit amet.',
            'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]);
    }
}
