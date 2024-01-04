<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;
use App\Http\Requests\Posts\CreateRequest;
use Carbon\Carbon;

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
            'posts' => Post::latest()
                ->published()
                ->filter(request(['search', 'category', 'author']))
                ->paginate()
                ->withQueryString()
        ]);
    }

    /**
     * Show a post in view.
     * 
     * @return View
     */
    public function show(Post $post): View
    {
        /**
         * Ajouter des policies
         */
        if (isset($post->published_at)) {
            return view('posts.show', [
                'post' => $post->load('category', 'author')
            ]);
        }

        abort(404);
    }
}
