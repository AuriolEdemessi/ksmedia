<!-- resources/views/posts/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="type">Type:</label>
            <select name="type" id="type">
                <option value="artwork">Artwork</option>
                <option value="exhibition">Exhibition</option>
            </select>
            @error('type')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" value="{{ old('author') }}">
            @error('author')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" value="{{ old('category') }}">
            @error('category')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="cover">Cover:</label>
            <input type="file" name="cover" id="cover">
            @error('cover')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="photos">Additional Photos:</label>
            <input type="file" name="photos[]" id="photos" multiple>
            @error('photos')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
