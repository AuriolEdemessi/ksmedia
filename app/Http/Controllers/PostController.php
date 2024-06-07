<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::create($validatedData);

        if ($request->hasFile('cover')) {
            $post->addMedia($request->file('cover'))->toMediaCollection('cover');
        }

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $post->addMedia($photo)->toMediaCollection('photos');
            }
        }

        return redirect()->route('posts.show', $post);
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function preview(Post $post)
    {
        return view('posts.preview', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:artwork,exhibition',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'cover' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post->update($request->only('title', 'type', 'author', 'description', 'category'));

        if ($request->hasFile('cover')) {
            $post->clearMediaCollection('cover');
            $post->addMediaFromRequest('cover')->toMediaCollection('cover');
        }

        if ($request->hasFile('photos')) {
            $post->clearMediaCollection('photos');
            foreach ($request->file('photos') as $photo) {
                $post->addMedia($photo)->toMediaCollection('photos');
            }
        }

        return redirect()->route('posts.show', $post)->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->clearMediaCollection('cover');
        $post->clearMediaCollection('photos');
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
