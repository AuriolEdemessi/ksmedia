@extends('layouts.app')

@section('content')

<div class="container">
        <h1>All Posts</h1>
        @if ($posts->isEmpty())
            <p>No posts available.</p>
        @else
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ asset('storage/' . $post->cover) }}" class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->description }}</p>
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>




@endsection
