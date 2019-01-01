@extends('layouts.portal')

@section('content')

<header class="slider">
  <div class="video-bg">
		<video src="video/hero.mp4" autoplay muted playsinline loop></video>
    
	  <div class="container">
	  
            <div class="link-holder"> <a href="{{ route('posts.index') }}">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" viewBox="2 2 100 100" xml:space="preserve">
                <circle fill="none" stroke="#fff" stroke-width="2" cx="52" cy="52" r="50"></circle>
              </svg>
              <span>DISCOVER</span> </a>
		  </div>
		  <!-- end link-holder -->
	  </div>
	  <!-- end container -->
	</div>
	<!-- end video-bg -->
    <div class="bottom-bar">
    
   
    <!-- end sound -->
    
    <!-- end swiper-pagination -->
    
    <!-- end slider-fraction -->
    
    <!-- end slider-controls --> 
  </div>
  <!-- end bottom-bar -->
  
  <!-- end left-side -->
  
  <!-- end right-side --> 
</header>

@stop