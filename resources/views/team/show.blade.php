@extends('layouts.app')

@section('content')


<div class="Content">
                    
<main class="SingleArtists">
        
        <div class="gallery columns-3">
            
                    <div class="gallery-item">
                            <div class="SingleArtists-main">
                                <h2 class="SingleArtists-title">{{ $teamMember->name }}</h2>
                                <div class="SingleArtists-description">
                                <div class="RichText">
                                @foreach($teamMember->roles as $role)
                                    <p>{{ $role->name }}</p>
                                    @endforeach
                                    <p>{{ $teamMember->description }}
                                        
                                    </p>
                                </div>
                            </div>
                            </div>
                    </div>


                   
                    <!--<div class="gallery-item">
                        <a href="" data-toggle="modal" data-target="#modal-cover">
                        <img src="" alt="Artwork Cover">
                        <div class="overlay">
                            <div class="image-description"></div>
                        </div>
                        </a>
                    </div>-->

                    @foreach($teamMember->posts as $post)
                            <div class="gallery-item">
                                <a href="" data-toggle="modal" data-target="#modal-photo-{{ $key }}">
                                <img src="{{ $photo }}" alt="{{ $post->title }} Artwork Photo">
                                <div class="overlay">
                                    <div class="image-description"></div>
                                </div>
                                </a>
                            </div>
                    @endforeach
    
    <!-- Modal for cover -->
    

            <!-- Modals for additional photos -->
            

              

            
            <!-- Ajoutez plus d'images ici -->
        </div>
                
                
    


</main>

                    

</div>

@endsection
