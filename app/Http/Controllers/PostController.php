<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
use App\Models\TeamMember;
use App\Models\Role;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $categories = Category::all(); // Récupérer toutes les catégories
        $authors = Author::all(); // Récupérer tous les auteurs
        $teamMembers = TeamMember::all(); // Récupérer tous les membres de l'équipe
        $roles = Role::all(); // Récupérer tous les rôles
       
        return view('posts.create', compact('categories', 'authors', 'teamMembers', 'roles'));
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
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        $post = Post::create($validatedData);

        $post->authors()->sync($request->author_id);

        if ($request->hasFile('cover')) {
            $post->addMedia($request->file('cover'))->toMediaCollection('cover');
        }

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $post->addMedia($photo)->toMediaCollection('photos');
            }
        }

        return redirect()->route('posts.show', $post)->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function manageposts()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.manageposts', compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('posts.edit', compact('post', 'categories', 'authors'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|array',
            'author_id.*' => 'integer|exists:authors,id',
            'description' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        $post->update($validatedData);

        $post->authors()->sync($request->author_id);

        if ($request->hasFile('cover')) {
            $post->clearMediaCollection('cover');
            $post->addMedia($request->file('cover'))->toMediaCollection('cover');
        }

        if ($request->hasFile('photos')) {
            $post->clearMediaCollection('photos');
            foreach ($request->file('photos') as $photo) {
                $post->addMedia($photo)->toMediaCollection('photos');
            }
        }

        return redirect()->route('admin.manageposts')->with('success', 'Post updated successfully.');
    }

    public function exhibitions()
    {
        $exhibitionPosts = Post::where('type', 'exhibition')->paginate(10);
        return view('posts.exhibitions', compact('exhibitionPosts'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.manageposts')->with('success', 'Post deleted successfully.');
    }
}
