<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [ 'posts' => Post::with('category')
        ->with('user')
        ->get() ]);
});

Route::get('posts/{post}', function (Post $post) {
    return view('post', ['post' => $post]);
});

Route::get('categories/{category}', function (Category $category) {
    return view('posts', ['posts' => $category->posts]);
})->name('categories');
