<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(6),
            'comments' => Comment::latest()->paginate(6),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post,
            'comments' => Comment::latest()->get(),
        ]);
    }

    public function showCategory($cat): View|RedirectResponse
    {
        if ($cat == 'all'){
           return redirect('/');
        }

        return view('posts.category-show', [
            'posts' => Post::latest()->paginate(6),
            'comments' => Comment::latest()->get(),
            'categories' => Category::all(),
            'cat' => $cat
        ]);

    }

    public function create(): View
    {
        return view('posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $formFields = $request->validate([
            'title' => ['required', 'min:3'],
            'category' => ['required', 'min:3'],
            'imageUrl' => 'nullable',
            'comment' => ['required', 'min:3'],
        ]);



        $formFields['user_id'] = auth()->id();

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created successfully');
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        if ($post->user_id != auth()->id()){
            abort(403, 'Unauthorized');
        }

        $formFields = $request->validate([
            'title' => ['required', 'min:3'],
            'category' => ['required', 'min:3'],
            'imageUrl' => 'nullable',
            'comment' => ['required', 'min:3'],
        ]);



        $post->update($formFields);

        return redirect('/posts/manage')->with('message', 'Post updated successfully');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect('/posts/manage')->with('message', 'Post deleted successfully');
    }

    public function manage(): View
    {
        return view('posts.manage', ['posts' => auth()->user()->post()->latest()->paginate(6)]);
    }


}
