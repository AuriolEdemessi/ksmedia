<!-- resources/views/posts/show.blade.php -->
@extends('layouts.admin')

@section('content')


    <h1>{{ $post->title }}</h1>
    <p>Type: {{ $post->type }}</p>
    <p>Author: {{ $post->author }}</p>
    <p>Description: {{ $post->description }}</p>
    <p>Category: {{ $post->category }}</p>

    <!-- Afficher l'image de couverture -->
    @if ($post->getFirstMedia('cover'))
        <div>
            <img src="{{ $post->getFirstMediaUrl('cover') }}" alt="{{ $post->title }}" style="max-width: 100%;">
        </div>
    @endif

    <!-- Afficher les images supplémentaires -->
    @if ($post->getMedia('photos')->count() > 0)
        <div>
            @foreach ($post->getMedia('photos') as $photo)
                <img src="{{ $photo->getUrl() }}" alt="{{ $post->title }}" style="max-width: 100%;">
            @endforeach
        </div>
    @endif
    
    <a href="{{ route('posts.edit', $post) }}">Edit</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

@stop
