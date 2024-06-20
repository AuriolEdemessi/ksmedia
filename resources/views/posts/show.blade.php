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
                        <p>Photography + Art direction: <b>Newson Shawn</b>
                            
                          </p>
                    </div>
                </div>
                <div class="SingleArtists-links">
                <div class="Links">
               
                
                </div>
    </div>
   

</div>
</div>

            <div class="gallery-item">
                <a href="">
                  <img src="{{ $post->cover }}" alt="{{ $post->title }} Artwork Cover">
                  <div class="overlay">
                    <div class="image-description"></div>
                  </div>
                </a>
              </div>

    @foreach($post->photos as $photo)
            <div class="gallery-item">
                <a href="">
                  <img src="{{ $photo }}" alt="{{ $post->title }} Artwork Photo">
                  <div class="overlay">
                    <div class="image-description"></div>
                  </div>
                </a>
              </div>
    @endforeach
    

              

            
            <!-- Ajoutez plus d'images ici -->
        </div>
                
                
    


</main>
                   
                    



                    
        </div>
    </div>










@endsection
