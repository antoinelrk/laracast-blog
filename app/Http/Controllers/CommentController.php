<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comments\CreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(CreateRequest $request, Post $post)
    {
        $post->comments()->create([
            'user_id' => Auth::id(),
            'body' => $request->body
        ]);

        return back();
    }
}
