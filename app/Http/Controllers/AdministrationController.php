<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdministrationController extends Controller
{

    public function managePosts(Post $post): View
    {
        return view('administration.admin-manage-posts', ['posts' => $post->latest()->paginate(6)]);
    }

    public function manageComments(Comment $comment): View
    {
        return view('administration.admin-manage-comments', ['comments' => $comment->latest()->paginate(6)]);
    }

    public function manageCategories(): View
    {
        return view('administration.admin-manage-categories', ['categories' => Category::all()]);
    }

    public function manageUsers(): View
    {
        return view('administration.admin-manage-users', ['users' => User::latest()->paginate(6)]);
    }

    public function store(Request $request): RedirectResponse
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        Category::create($formFields);

        return back()->with('message', 'Category created successfully');
    }

    public function destroyPost(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect('/posts/admin-manage/posts')->with('message', 'Post deleted successfully');
    }

    public function destroyCategory(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect('/posts/admin-manage/categories')->with('message', 'Category deleted successfully');
    }

    public function destroyUser(User $user): RedirectResponse
    {
        $user->delete();
        return redirect('/posts/admin-manage/users')->with('message', 'User deleted successfully');
    }

    public function destroyComment(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return redirect('/posts/admin-manage/comments')->with('message', 'Comment deleted successfully');
    }

}
