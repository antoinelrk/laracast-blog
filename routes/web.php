<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [
        'categories' => Category::all(),
        'posts' => Post::latest()
                        ->with('category', 'author')
                        ->get()
    ]);
})->name('home');

Route::get('posts/{post}', function (Post $post) {
    return view('post', ['post' => $post->load('category', 'author')]);
});

Route::get('categories/{category}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts->load('category', 'author'),
        'categories' => Category::where('slug', '!=', $category->slug)->get(),
        'category' => $category
    ]);
})->name('categories');

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts->load('category', 'author')
    ]);
})->name('authors');
