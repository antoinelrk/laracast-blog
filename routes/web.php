<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/{slug}', function ($slug) {
    $post = Post::find($slug);

    return view('post', [
        'post' => $post
    ]);
})->where('slug', '[A-z_\-]+');