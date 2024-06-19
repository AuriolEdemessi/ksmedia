<!-- resources/views/authors/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Author Details</h2>
            <p><strong>ID:</strong> {{ $author->id }}</p>
            <p><strong>Name:</strong> {{ $author->name }}</p>
            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
