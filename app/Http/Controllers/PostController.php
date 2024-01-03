<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;
use App\Http\Requests\Posts\CreateRequest;
use Symfony\Component\HttpFoundation\Response;

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
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate()->withQueryString()
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

    public function create(): View
    {
        return view('posts.create', [
            'categories' => Category::get(['id', 'name'])
        ]);
    }

    public function store(CreateRequest $request)
    {
        $path = $request->file('thumbnail')->store('thumbnails', 'public');

        $data = [
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'user_id' => auth()->user()->id,
            'thumbnail' => $path,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->title)
        ];

        $post = Post::create($data);

        return redirect(route('posts.show', $post));
    }
}
