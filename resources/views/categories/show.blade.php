<!-- resources/views/categories/show.blade.php -->

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Category Details</h2>
            <p><strong>ID:</strong> {{ $category->id }}</p>
            <p><strong>Name:</strong> {{ $category->name }}</p>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
