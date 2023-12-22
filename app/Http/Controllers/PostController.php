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
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show a post in view.
     * 
     * @return View
     */
    public function show(Post $post): View
    {
        return view('post', [
            'post' => $post->load('category', 'author')
        ]);
    }
}
