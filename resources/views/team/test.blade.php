@extends('layouts.app')

@section('content')

<div class="Content">
                    
<main class="SingleArtists">

<div class="SingleArtists-main">
    <h2 class="SingleArtists-title">OUR TEAM</h2>
    
    <div class="SingleArtists-description">
    
    <div class="RichText">
            <h3> {{ $founder->name }}</h3>
            <h4> {{ $founder->role }} of Kerawa Space</h4>
                <div class="Share">
                  <a href="{{ route('team.show', $founder->id) }}" class="Share-button">Discover {{ $founder->name }}</a>
                
                </div>
            </div>
            
</div>
<div class="SingleArtists-links">
<div class="Links">


</div>
</div>


</div>


<!--<div class="SingleArtists-main">
    <div class="gallery columns-1">

        <div class="gallery-item">
            <a href="">
              <img src="{{ $founder->profile_picture_url }}" alt="{{ $founder->name }}" style="width: 80%;">
              
            </a>
            <div class="RichText">
            <h3> {{ $founder->name }}</h3>
            <h4> {{ $founder->role }} of Kerawa Space</h4>
                <div class="Share">
                  <a href="{{ route('team.show', $founder->id) }}" class="Share-button">Discover {{ $founder->name }}</a>
                
                </div>
            </div>
             
          </div>

          


    </div>
</div>-->
        
<section class="PageModules"></section>
</main>

<main class="SingleArtists">


<div class="gallery columns-4">

@foreach($teamMembers as $member)
<div class="gallery-item">
                            <a href="{{ route('team.show', $member->id) }}">
                              <img src="{{ $member->profile_picture_url }}" alt="{{ $member->name }}">
                              <div class="overlay">
                                <div class="image-description">{{ $member->name }}</div>
                              </div>
                            </a>
                </div>
        <div class="RichText">
           <h3>{{ $member->name }}</h3>
           <h4>{{ $member->role }}</h4>
           <a href="{{ route('team.show', $member->id) }}" class="Share-button">Discover {{ $member->name }}</a>
    </div>


@endforeach
                        
</div>
</main>



    </div>
 </div>
        

@endsection
