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

                                    <div class="Login">
                                        
                                        <form method="POST" action="{{ route('login') }}" class="Login-form">
                                            @csrf
                                            <div class="form-group">
                                                <label for="email" class="RichText">Email</label>
                                                <input type="email" name="email" class="NewsletterForm-input" id="email" required autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="RichText">Password</label>
                                                <input type="password" name="password" class="NewsletterForm-input" id="password" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="Share-button">Login</button>
                                            </div>
                                            <div class="form-group">
                                                <a class="RichText" href="{{ route('register') }}">Register if you are new here</a>
                                            </div>
                                        </form>
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
 </div>
        

@endsection
