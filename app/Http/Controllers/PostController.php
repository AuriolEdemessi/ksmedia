<?php
namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('images', 'authors')->get();
        return view('index')->with('posts', $posts);
    }

    public function artworks()
    {
        $posts = Post::with('images', 'authors')->where('type', 'artwork')->get();
        return view('artworks')->with('posts', $posts);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path("cover/"), $imageName);

            $post = new Post([
                "title" => $request->title,
                "body" => $request->body,
                "cover" => $imageName,
                "type" => $request->type,
                "category" => $request->category,
            ]);
            $post->save();

            if ($request->authors) {
                $authorIds = [];
                foreach ($request->authors as $authorName) {
                    $author = Author::firstOrCreate(['name' => $authorName]);
                    $authorIds[] = $author->id;
                }
                $post->authors()->sync($authorIds);
            }

            if ($request->hasFile("images")) {
                $files = $request->file("images");
                foreach ($files as $file) {
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    $request['post_id'] = $post->id;
                    $request['image'] = $imageName;
                    $file->move(public_path("/images"), $imageName);
                    Image::create($request->all());
                }
            }
        }

        return redirect("/projects");
    }

    public function show(Post $post)
    {
        //
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (File::exists("cover/" . $post->cover)) {
                File::delete("cover/" . $post->cover);
            }
            $file = $request->file("cover");
            $post->cover = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("/cover"), $post->cover);
            $request['cover'] = $post->cover;
        }

        $post->update([
            "title" => $request->title,
            "body" => $request->body,
            "cover" => $post->cover,
            "type" => $request->type,
            "category" => $request->category,
        ]);

        if ($request->authors) {
            $authorIds = [];
            foreach ($request->authors as $authorName) {
                $author = Author::firstOrCreate(['name' => $authorName]);
                $authorIds[] = $author->id;
            }
            $post->authors()->sync($authorIds);
        }

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request["post_id"] = $id;
                $request["image"] = $imageName;
                $file->move(public_path("images"), $imageName);
                Image::create($request->all());
            }
        }

        return redirect("/projects");
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if (File::exists("cover/" . $post->cover)) {
            File::delete("cover/" . $post->cover);
        }
        $images = Image::where("post_id", $post->id)->get();
        foreach ($images as $image) {
            if (File::exists("images/" . $image->image)) {
                File::delete("images/" . $image->image);
            }
        }
        $post->delete();
        return back();
    }

    public function deleteimage($id)
    {
        $image = Image::findOrFail($id);
        if (File::exists("images/" . $image->image)) {
            File::delete("images/" . $image->image);
        }

        $image->delete();
        return back();
    }

    public function deletecover($id)
    {
        $cover = Post::findOrFail($id)->cover;
        if (File::exists("cover/" . $cover)) {
            File::delete("cover/" . $cover);
        }
        return back();
    }
}

