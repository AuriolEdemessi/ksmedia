


@extends('layouts.app')

@section('content')



<div class="Content">
    <main class="SingleArtists">
        
        
        <div class="gallery columns-3">
            <div class="gallery-item">
                <div class="SingleArtists-main">
                    <h2 class="SingleArtists-title">MONSIEUR EST NOIR - SS23 CAMPAIGN</h2>
                    <div class="SingleArtists-description">
                        <div class="RichText">
                            <p>desc</p>
                            <p>Photography + Art direction: <b>Newson Shawn</b><br><br>
                                Creative Direction: <b>Ayinla Silva</b>
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

              


            <div class="gallery-item">
                

               
            <img src="/cover/{{ $posts->cover }}" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="Image 2">
                  <div class="overlay">
                    <div class="image-description"></div>
                  </div>
                
              </div>

              
              @if (count($posts->images)>0)
                     <p>Images:</p>
                     @foreach ($posts->images as $img)
                     <form action="/deleteimage/{{ $img->id }}" method="post">
                         <button class="btn text-danger">X</button>
                         @csrf
                         @method('delete')
                         </form>
                     <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                     @endforeach
                     @endif

            

<div class="gallery-item">
    <a href="">
      <img src="images/artworks/men/11.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

  <div class="gallery-item">
    <a href="">
      <img onclick="openModal();currentSlide(1)" class="hover-shadow" src="images/artworks/men/03.jpg" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

  <div class="gallery-item">
    <a href="">
      <img src="images/artworks/men/04.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

  <div class="gallery-item">
    <a href="">
      <img src="images/artworks/men/05.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

          
  <div class="gallery-item">
    <a href="images/artworks/men/06.jpg">
      <img src="images/artworks/men/06.jpg" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

  <div class="gallery-item">
    <a href="images/artworks/men/07.jpg">
      <img src="images/artworks/men/07.jpg" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

  <div class="gallery-item">
    <a href="">
      <img src="images/artworks/men/08.jpg"  onclick="openModal();currentSlide(1)" class="hover-shadow" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

  <div class="gallery-item">
    <a href="">
      <img src="images/artworks/men/09.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

  <div class="gallery-item">
    <a href="">
      <img src="images/artworks/men/10.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

  <div class="gallery-item">
    <a href="">
      <img src="images/artworks/men/12.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" alt="Image 2">
      <div class="overlay">
        <div class="image-description"></div>
      </div>
    </a>
  </div>

                <div class="column">
                    <img src="images/artworks/men/cov.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
                </div>
                <div class="column">
                    <img src="images/artworks/men/02.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
                </div>
                <!-- Continuez d'ajouter d'autres images avec le même format -->
            </div>

        </div>
    </main>
</div>




@stop

