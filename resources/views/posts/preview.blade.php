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
                            <p> {{ $post->description }}</p>
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

            @if ($post->getFirstMedia('cover'))


            <div class="gallery-item">
                

               
            <img src="{{ $post->getFirstMediaUrl('cover') }}" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="{{ $post->title }}">
                  <div class="overlay">
                    <div class="image-description"></div>
                  </div>
                
              </div>

              @endif

            
              @if ($post->getMedia('photos')->count() > 0)
              @foreach ($post->getMedia('photos') as $photo)
<div class="gallery-item">
    <a href="">
      <img src="{{ $photo->getUrl() }}" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="{{ $post->title }}">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>
  @endforeach
  @endif

  

                
                
                <!-- Continuez d'ajouter d'autres images avec le même format -->
            </div>

        </div>
    </main>
</div>



@stop
