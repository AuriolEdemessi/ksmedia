<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
    
        $categories = Category::all();
        $authors = Author::all();
        return view('posts.create', compact('categories', 'authors'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|array',
            'author_id.*' => 'integer|exists:authors,id',
            'description' => 'required|string',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        $post = Post::create($validatedData);

        $post->authors()->attach($request->author_id);

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

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function manageposts()
    {
        $posts = Post::all();
        return view('admin.manageposts', compact('posts'));
    }

    public function edit($id)
{
    $post = Post::find($id);
    if (!$post) {
        abort(404); // Gérer le cas où le post n'est pas trouvé
    }
    return view('posts.edit', compact('post'));
}

public function update(Request $request, $id)
{
    $post = Post::find($id);
    if (!$post) {
        abort(404); // Gérer le cas où le post n'est pas trouvé
    }
    $validatedData = $request->validate([
        // Validation des données
    ]);
    $post->update($validatedData);
    return redirect()->route('admin.manageposts')->with('success', 'Post updated successfully');
}

public function destroy($id)
{
    $post = Post::find($id);
    if (!$post) {
        abort(404); // Gérer le cas où le post n'est pas trouvé
    }
    $post->delete();
    return redirect()->route('admin.manageposts')->with('success', 'Post deleted successfully');
}

}
