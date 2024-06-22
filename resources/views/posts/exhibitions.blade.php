@extends('layouts.app')

@section('content')

<div class="Content">
                    
    <main class="SingleArtists">

        <div class="gallery columns-4">

            @foreach ($exhibitionPosts as $post)

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

                      
<main class="SingleArtists">
    <section class="FooterTeaser">
        <div class="Teasers items--2">
            <div class="Teasers-item">
                <a class="" href="">
                    <figure class="Teasers-item-image Image" >
                        <img src="images/kerawa.gif" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                    </figure>
                    <div class="Teasers-item-info">
                        <span class="Teasers-item-cta">WAIT FOR SOME EXHIBITIONS</span>
                    </div>
                </a>
            </div>
            <div class="Teasers-item">
                <a class="" href="/posts">
                    <figure class="Teasers-item-image Image" >
                        <img src="images/men0.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                    </figure>
                    <div class="Teasers-item-info">
                        <span class="Teasers-item-cta">Review all the projects</span>
                    </div>
                </a>
            </div>
            
            
                                
                                
            
            
            

        </div>
        </section>
            




</main>

</div>

@endsection
