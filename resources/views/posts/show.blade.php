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
                <a href="" data-toggle="modal" data-target="#modal-cover">
                  <img src="{{ $post->cover }}" alt="{{ $post->title }} Artwork Cover">
                  <div class="overlay">
                    <div class="image-description"></div>
                  </div>
                </a>
              </div>

    @foreach($post->photos as $key => $photo)
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
    <div class="modal fade" id="modal-cover" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="{{ $post->cover }}" class="img-fluid">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modals for additional photos -->
            @foreach($post->photos as $key => $photo)
                <div class="modal fade" id="modal-photo-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="{{ $photo }}" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#modal-photo-{{ ($key - 1 + count($post->photos)) % count($post->photos) }}">Previous</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#modal-photo-{{ ($key + 1) % count($post->photos) }}">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

              

            
            <!-- Ajoutez plus d'images ici -->
        </div>
                
                
    


</main>
                   
                    



                    
        </div>
    </div>







<!-- JavaScript for modal navigation -->
<script>
    $(document).ready(function(){
        $('.prev-btn').click(function(){
            var current = parseInt($(this).data('current'));
            var prev = (current - 1 + {{ count($post->photos) }}) % {{ count($post->photos) }};
            $('#modal-photo-' + prev).modal('show');
            $('#modal-photo-' + current).modal('hide');
        });

        $('.next-btn').click(function(){
            var current = parseInt($(this).data('current'));
            var next = (current + 1) % {{ count($post->photos) }};
            $('#modal-photo-' + next).modal('show');
            $('#modal-photo-' + current).modal('hide');
        });
    });
</script>





@endsection
