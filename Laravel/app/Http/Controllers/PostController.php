<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show form to create a new post
    public function create()
    {
        return view('posts.create');
    }


    public function search(Request $request)
{
    $query = $request->input('query');

    $posts = Post::where('title', 'like', "%{$query}%")
        ->orWhere('content', 'like', "%{$query}%")
        ->get();

    return view('posts.index', compact('posts'));
}


    // Store a new post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string',
        ]);

        $thumbnailPath = $request->file('thumbnail') ? $request->file('thumbnail')->store('thumbnails', 'public') : null;

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'thumbnail' => $thumbnailPath,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // Show all posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Show a single post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Show form to edit a post
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit', compact('post'));
    }

    // Update a post
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required|string',
        ]);

        $thumbnailPath = $request->file('thumbnail') ? $request->file('thumbnail')->store('thumbnails', 'public') : $post->thumbnail;

        $post->update([
            'title' => $request->title,
            'thumbnail' => $thumbnailPath,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    // Delete a post
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}

