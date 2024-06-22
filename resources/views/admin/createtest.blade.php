<div class="container">
                    <h1>Create Post</h1>
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" class="form-control" required>
                                <option value="artwork">Artwork</option>
                                <option value="exhibition">Exhibition</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select id="category_id" name="category_id" required>
                            <option value="">Sélectionner une catégorie</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="author_id">Authors</label>
                            <select name="author_id[]" class="form-control" multiple required>
                                @foreach($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="file" name="cover" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="photos">Additional Photos/Videos</label>
                            <input type="file" name="photos[]" class="form-control" multiple>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
                </div>










<div class="container">
<div class="row">
    <div class="col-md-12">
        <h2>Add New Category</h2>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Add New Author</h2>
            <form action="{{ route('authors.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<section>

            <div class="row">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="my-4">Manage Posts</h1>
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <img src="{{ $post->cover }}" class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <!--<p class="card-text">{{ $post->description }}</p>-->
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


                
            
            </div>

              
            </section>