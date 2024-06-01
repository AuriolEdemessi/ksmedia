<!-- resources/views/posts/index.blade.php -->
@extends('layouts.admin')

@section('content')

    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    @foreach ($posts as $post)
        <div>
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->description }}</p>
        </div>
    @endforeach


    @stop