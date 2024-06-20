@extends('layouts.app')

@section('content')

<div class="Content">
                    
                    <main class="SingleArtists">

                    <div class="gallery columns-3">

                    @foreach ($posts as $post)

                    <div class="gallery-item">
                                <a href="{{ route('posts.show', $post) }}">
                                  <img src="{{ $post->cover }}" alt="{{ $post->title }}">
                                  <div class="overlay">
                                    <div class="image-description">{{ $post->title }}</div>
                                  </div>
                                </a>
                    </div>

                    @endforeach

                    </div>
                       
                        
            </main>
        </div>
</div>







@endsection
