@extends('layouts.app')

@section('content')

<br><br><br>

<div class="container my-5">
<h2 class="SingleArtists-title">OUR TEAM</h2>
<hr>
@foreach($teamMembers as $member)
<div class="list-group">
        <!-- Boucle pour afficher chaque membre de l'équipe -->
        
        <div class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-1">{{ $founder->name }}</h5>
                <!-- Bouton pour voir plus de détails -->
                <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#details-{{ $member->id }}" aria-expanded="false" aria-controls="details-{{ $member->id }}">
                    Découvrir
                </button>
            </div>
            <!-- Détails cachés (rôle et description) -->
            <div class="collapse mt-3" id="details-{{ $member->id }}">
                <p><strong></strong>  {{ $founder->role }} of Kerawa Space</p>
                <p><strong></strong>  {{ $founder->description }} </p>
            </div>
        </div>
        
    </div>
    @endforeach

    <br>

    <div class="list-group">
        <!-- Boucle pour afficher chaque membre de l'équipe -->
        @foreach($teamMembers as $member)
        <div class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-1">{{ $member->name }}</h5>
                <!-- Bouton pour voir plus de détails -->
                <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#details-{{ $member->id }}" aria-expanded="false" aria-controls="details-{{ $member->id }}">
                    Découvrir
                </button>
            </div>
            <!-- Détails cachés (rôle et description) -->
            <div class="collapse mt-3" id="details-{{ $member->id }}">
                <p><strong></strong> {{ $member->role }}</p>
                <p><strong></strong> {{ $member->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

        

@endsection
