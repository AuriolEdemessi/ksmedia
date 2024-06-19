@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Panel</h1>

        <div class="row">
            <div class="col-md-6">
                <h3>Posts</h3>
                <ul>
                    <li><a href="{{ route('posts.index') }}">View All Posts</a></li>
                    <li><a href="{{ route('posts.create') }}">Create New Post</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Categories</h3>
                <ul>
                    <li><a href="{{ route('categories.index') }}">View All Categories</a></li>
                    <li><a href="{{ route('categories.create') }}">Create New Category</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Authors</h3>
                <ul>
                    <li><a href="{{ route('authors.index') }}">View All Authors</a></li>
                    <li><a href="{{ route('authors.create') }}">Create New Authors</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
