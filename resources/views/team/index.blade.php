@extends('layouts.app')

@section('content')

<div class="Content">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #000;
        }

        .credits-container {
            width: 100%;
            margin: 50px 0;
            padding: 20px;
            background-color: #fff;
        }
        .credits-item {
            margin-bottom: 30px;
            padding: 0 20px;
        }
        .credits-item h2 {
            font-size: 38px;
            font-weight: bold;
            text-transform: uppercase;
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
            margin: 0;
        }
        .credits-item p {
            margin: 5px 0 0;
            font-size: 16px;
            color: #333;
        }
    </style>
        
        

       <div class="credits-container">

       @foreach ($roles as $role)
            @if ($role->teamMembers->isNotEmpty())
                <div class="credits-item">
                    <h2>{{ $role->name }}</h2>
                    @foreach ($role->teamMembers as $member)
                        <p>
                            <a href="{{ route('team.show', $member->id) }}" style="text-decoration: none; color: inherit;">
                                {{ $member->name }}
                            </a>
                        </p>
                    @endforeach
                </div>
            @endif
        @endforeach

           
         

             
                 



                    
        </div>

<br><br><br>



    
</div>

        

@endsection
