<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;
use App\Http\Requests\Posts\CreateRequest;
use Illuminate\Routing\Redirector;

class AdminPostController extends Controller
{
    public function index(): View
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    public function create(): View
    {
        return view('admin.posts.create');
    }

    public function store(CreateRequest $request): Redirector
    {
        $path = $request->file('thumbnail')->store('thumbnails', 'public');

        $data = [
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'user_id' => auth()->user()->id,
            'thumbnail' => $path,
            'published_at' => $request->published ? Carbon::now() : NULL,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->title)
        ];

        $post = Post::create($data);

        return redirect(route('posts.show', $post));
    }

    public function edit(Post $post): View
    {
        return view('admin.posts.edit');
    }

    public function update(): Redirector {

        return redirect();
    }
}
