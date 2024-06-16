


@extends('layouts.app')

@section('content')

<div class="Content">
                    
                    <main class="SingleArtists">

                        

                       
                   

                        <div class="gallery columns-3">

                        @foreach ($posts as $post)

                            <div class="gallery-item">
                                <a href="">
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

@stop

