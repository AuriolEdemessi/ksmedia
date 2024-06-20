@extends('layouts.app')

@section('content')

<div class="Content">
                    
<main class="SingleArtists">
    <section class="FooterTeaser">
        <div class="Teasers items--3">
            <div class="Teasers-item">
                <a class="{{ route('posts.index') }}" href="rosyne.html">
                    <figure class="Teasers-item-image Image" >
                        <img src="images/rosyne.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                    </figure>
                    <div class="Teasers-item-info">
                        <span class="Teasers-item-cta">OUR WORKS</span>
                    </div>
                </a>
            </div>
            <div class="Teasers-item">
                <a class="" href="{{ route('posts.create') }}">
                    <figure class="Teasers-item-image Image" >
                        <img src="images/men1.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                    </figure>
                    <div class="Teasers-item-info">
                        <span class="Teasers-item-cta">ADD NEW POST</span>
                    </div>
                </a>
            </div>
            <div class="Teasers-item">
                <a class="" href="{{ route('categories.index') }}">
                    <figure class="Teasers-item-image Image" >
                        <img src="images/vogue.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                    </figure>
                    <div class="Teasers-item-info">
                        <span class="Teasers-item-cta">OUR CATEGORIES</span>
                    </div>
                </a>
            </div>
            <div class="Teasers-item">
                                    <a class="" href="{{ route('categories.create') }}">
                                        <figure class="Teasers-item-image Image" >
                                            <img src="images/11.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                                        </figure>
                                        <div class="Teasers-item-info">
                                            <span class="Teasers-item-cta">ADD NEW CATEGORY</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="Teasers-item">
                                    <a class="" href="">
                                        <figure class="Teasers-item-image Image" >
                                            <img src="images/melissa.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                                        </figure>
                                        <div class="Teasers-item-info">
                                            <span class="Teasers-item-cta">ADD NEW TEAM MEMBER</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="Teasers-item">
                                    <a class="" href="{{ route('authors.create') }}">
                                        <figure class="Teasers-item-image Image" >
                                            <img src="images/ateliervo.jpg" class="Teasers-item-image-img " width="1707" height="2560"  data-sizes="auto" data-optimumx="2"/>
                                        </figure>
                                        <div class="Teasers-item-info">
                                            <span class="Teasers-item-cta">ADD NEW AUTHOR</span>
                                        </div>
                                    </a>
                                </div>
            
            
            

        </div>
        </section>
            




</main>
</div>

</div>



    
@endsection
