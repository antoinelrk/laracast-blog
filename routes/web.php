<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [ 
        'posts' => Post::latest()
                        ->with('category', 'author')
                        ->get()
    ]);
})->name('home');

Route::get('posts/{post}', function (Post $post) {
    return view('post', ['post' => $post]);
});

Route::get('categories/{category}', function (Category $category) {
    return view('posts', ['posts' => $category->posts]);
})->name('categories');

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', ['posts' => $author->posts]);
})->name('authors');
