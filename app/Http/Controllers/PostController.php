<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    /**
     * Show all posts on homepage, with search & filters
     * 
     * @return View
     */
    public function index(): View
    {    
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
        ]);
    }

    /**
     * Show a post in view.
     * 
     * @return View
     */
    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post->load('category', 'author')
        ]);
    }
}
