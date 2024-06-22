@extends('layouts.app')

@section('content')

<div class="Content">
                    
<main class="SingleArtists">
    <section class="FooterTeaser">
        <div class="Teasers items--3">
            <div class="Teasers-item">
                <a class="" href="{{ route('posts.index') }}">
                    <figure class="Teasers-item-image Image" >
                        <img src="images/rosyne.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                    </figure>
                    <div class="Teasers-item-info">
                        <span class="Teasers-item-cta">OUR WORKS</span>
                    </div>
                </a>
            </div>
            <div class="Teasers-item">
                <a class="" href="{{ route('team.index') }}">
                    <figure class="Teasers-item-image Image" >
                        <img src="images/men1.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                    </figure>
                    <div class="Teasers-item-info">
                        <span class="Teasers-item-cta">OUR TEAM</span>
                    </div>
                </a>
            </div>
            <div class="Teasers-item">
                <a class="" href="/contact">
                    <figure class="Teasers-item-image Image" >
                        <img src="images/vogue.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                    </figure>
                    <div class="Teasers-item-info">
                        <span class="Teasers-item-cta">CONTACT US</span>
                    </div>
                </a>
            </div>
            
                                
                                
            
            
            

        </div>
        </section>
            




</main>
</div>

</div>



    
@endsection
