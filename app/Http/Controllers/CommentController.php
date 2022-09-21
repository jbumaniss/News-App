<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post, Request $request): RedirectResponse
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'min:3', 'email'],
            'comment' => ['required', 'min:3'],
        ]);


        $formFields['post_id'] = $post->id;


        Comment::create($formFields);

        return redirect('/')->with('message', 'Comment created successfully');
    }
}
