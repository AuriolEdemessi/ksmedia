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