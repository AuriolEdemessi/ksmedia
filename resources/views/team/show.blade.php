@extends('layouts.app')

@section('content')


<div class="Content">
                    
                    <main class="SingleArtists">

                    <div class="SingleArtists-image">
                            
                            <figure class="SingleArtists-image-image has-thumbnail Image has-thumbnail" >
                                <img class="SingleArtists-image-image-img" src="{{ $teamMember->profile_picture_url }}" alt="{{ $teamMember->name }}" style="max-width:100%; max-height:100%;">
                                </figure>
                    </div>

                    <div class="SingleArtists-main">
                        <h2 class="SingleArtists-title">{{ $teamMember->name }}</h2>
                            <div class="SingleArtists-description">
                                    <div class="RichText">
                                         <h3>{{ $teamMember->role }}</h3>
                                        <p>{{ $teamMember->description }}</p>
                                    </div>

                                    

                            </div>

                    <div class="SingleArtists-links">
                        <div class="Links">
                               
                                
                        </div>
                    </div>
                    

                </div>

                


                <section class="PageModules"></section>

                </main>

</div>

@endsection
