<!-- resources/views/posts/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="type">Type:</label>
            <select name="type" id="type">
                <option value="artwork" {{ $post->type == 'artwork' ? 'selected' : '' }}>Artwork</option>
                <option value="exhibition" {{ $post->type == 'exhibition' ? 'selected' : '' }}>Exhibition</option>
            </select>
            @error('type')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" value="{{ old('author', $post->author) }}">
            @error('author')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ old('description', $post->description) }}</textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" value="{{ old('category', $post->category) }}">
            @error('category')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="cover">Cover Image:</label>
            <input type="file" name="cover" id="cover">
            @error('cover')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="photos">Additional Photos:</label>
            <input type="file" name="photos[]" id="photos" multiple>
            @error('photos.*')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
