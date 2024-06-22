@extends('layouts.app')

@section('content')

<div class="Content">
                    
                    <main class="SingleArtists">

                    <div class="SingleArtists-image">
                            
                            <figure class="SingleArtists-image-image has-thumbnail Image has-thumbnail" >
                                <img class="SingleArtists-image-image-img" src="images/men.jpg" alt="Men Image" style="max-width:100%; max-height:100%;">
                                </figure>
                    </div>

                    <div class="SingleArtists-main">
                        <h2 class="SingleArtists-title">WELCOME BACK !</h2>
                            <div class="SingleArtists-description">
                                    <div class="RichText">
                                        <p></p>
                                    </div>

                                    

                            </div>

                    <div class="SingleArtists-links">
                        <div class="Links">
                               
                                
                        </div>
                    </div>
                    

                </div>

                


                <section class="PageModules"></section>

                </main>


                <main class="SingleArtists">

<div class="gallery columns-2">

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
           <div class="Share"><button class="Share-button" onclick="navigateToProjects()">Discover {{ $member->name }}</button>
                        <script>
                            function navigateToProjects() {
                              window.location.href = "{{ route('team.show', $member->id) }}";
                            }
                          </script>
        </div>
    </div>
  

@endforeach

</div>

                      
                    
</main>


                </div>
 </div>
        

@endsection


@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Team Member Details</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $teamMember->name }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $teamMember->description }}</p>
            @if($teamMember->profile_picture)
                <img src="{{ $teamMember->profile_picture }}" alt="Profile Picture" width="200">
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('team.edit', $teamMember) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('team.destroy', $teamMember) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
