<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')



<div class="Content">
                    
                    <main class="SingleArtists">

                        

                       
                   

                        <div class="gallery columns-3">

                        @foreach ($posts as $post)

                            <div class="gallery-item">
                                <a href="{{ route('posts.show', $post) }}">
                                <img src="cover/{{ $post->cover }}" alt="">
                                  <div class="overlay">
                                    <div class="image-description">{{ $post->title }} - {{ $post->author }}</div>
                                  </div>
                                </a>
                              </div>

                              @endforeach


                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                          

                            

                            
                                   
                            
                            <!-- Ajoutez plus d'appassets/images ici -->
                        </div>
                          
                        
                                

                

                
            </main>
        </div>
    </div>

    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    @foreach ($posts as $post)
        <div>
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->description }}</p>
        </div>
    @endforeach


    @stop