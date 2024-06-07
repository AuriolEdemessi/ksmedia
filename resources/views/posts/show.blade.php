@extends('layouts.app')

@section('content')
<div class="Content">
    <main class="SingleArtists">
        <div class="gallery columns-3">
            <div class="gallery-item">
                <div class="SingleArtists-main">
                    <h2 class="SingleArtists-title">{{ $post->title }}</h2>
                    <div class="SingleArtists-description">
                        <div class="RichText">
                            <p>{{ $post->description }}</p>
                            <p>Type: {{ $post->type }} by <b>{{ $post->author }}</b><br><br>
                                Category: <b>{{ $post->category }}</b>
                            </p>
                        </div>
                    </div>
                    <div class="SingleArtists-links">
                        <div class="Links"></div>
                    </div>
                </div>
            </div>

            <!-- Images de la galerie avec Fancybox -->
            <div class="row">
                @if($post->cover_url)
                <div class="gallery-item">
                    <img src="{{ $post->cover_url }}" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="{{ $post->title }}">
                    <div class="overlay">
                        <div class="image-description"></div>
                    </div>
                </div>
                @endif

                @if($post->photos_urls)
                @foreach($post->photos_urls as $photo_url)
                <div class="gallery-item">
                    <a href="#">
                        <img src="{{ $photo_url }}" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="{{ $post->title }}">
                        <div class="overlay">
                            <div class="image-description"></div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </main>
</div>
@stop
