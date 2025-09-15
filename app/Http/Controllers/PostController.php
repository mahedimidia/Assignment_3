<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // PostController.php
public function index()
{
    $user = Auth::user();

    if ($user->role === 'admin') {
        // Admin can see all posts
        $posts = Post::with(['user', 'category'])->paginate(10);
    } else {
        // Content creator only sees their own
        $posts = Post::with(['user', 'category'])
                     ->where('user_id', $user->id)
                     ->paginate(10);
    }

    return view('Admin.show_posts', compact('posts'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('Admin.create_posts', compact('categories'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Post::create([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'status' => 'Draft', // Default status set to 'draft'
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }


    public function toggleStatus(Post $post)
{
    $post->status = $post->status === 'published' ? 'draft' : 'published';
    $post->save();

    return redirect()->route('posts.index')->with('success', 'Post status updated successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $post = Post::findOrFail($id);
        Gate::authorize('permission',$post);
        $categories = Category::get();
        return view('Admin.edit_post', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post = Post::findOrFail($id);
        Gate::authorize('permission',$post);
        $post->update([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        Gate::authorize('permission',$post);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
