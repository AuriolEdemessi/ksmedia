<!-- resources/views/authors/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Authors</h2>
            <a href="{{ route('authors.create') }}" class="btn btn-primary mb-2">Add New Author</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>{{ $author->name }}</td>
                        <td>
                            <a href="{{ route('authors.show', $author->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
