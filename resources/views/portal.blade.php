@extends('layouts.portal')

@section('content')

<section id="main" class="main main-fullscreen active">

      <!-- Main Section Content Start -->
      <div class="main__content content-fullheight fullheight-mobile">

        <!-- Fullscreen Background Start-->
        <div class="fullscreen-bg">
          <!-- local video background -->
          <div class="video-background">
            <video id="main-video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="img/backgrounds/1920x1080-video-1.webp">
              <source type="video/mp4" src="video/hero.mp4">
             
            </video>
          </div>
          <!-- dark cover layer -->
          <div class="color-layer layer-dark-06"></div>
        </div>
        <!-- Fullscreen Background End-->

        <div class="container-fluid px-0 fullheight-mobile">
          <div class="row gx-0 fullheight-mobile">

            <!-- Main Section Intro Start -->
            <div class="col-12 main__intro intro-fullheight">

              <!-- Main Intro Content Start -->
              <div class="intro__content fullheight-mobile">
                <div class="container-fluid p-0 fullheight-mobile">
                  <div class="row g-0 fullheight-mobile">
                    <div class="col-12 fullheight-mobile">

                      <!-- Headline Start -->
                      <div id="headline" class="headline centered-mobile">
                        <h1 class="headline__title large"><br><br><br><br>
                          
                        </h1>
                        
                        <div class="headline__btnholder d-flex flex-column flex-md-row">
                          <a href="/posts" class="d-flex justify-content-center justify-content-md-start btn btn-s btn-icon-left btn-light link-s">
                            <h3 class="headline__title large"><span class="btn-title">DISCOVER <b>US</b></span>
                            <span class="btn-icon-anim"><i class="fa-solid fa-arrow-right"></i></span></h3>
                          </a>
                          
                        </div>
                      </div>
                      <!-- Headline End -->

                    </div>
                  </div>
                </div>
              </div>
              <!-- Main Intro Content End -->

            </div>
            <!-- Main Section Intro End -->

          </div>
        </div>

        <!-- Main Section Marquee Start -->
        <a href="mailto:info@kerawaspace.com" class="marquee link-l-arrow">
          <div class="marquee-content scroll">
            <span>Contact</span>
            
            <span>Get in touch</span>
          </div>
          <div class="marquee-content scroll">
            <span>Contact</span>
            
            <span>Get in touch</span>
          </div>
          <div class="marquee-content scroll">
            <span>Contact</span>
            
            <span>Get in touch</span>
          </div>
        </a>
        <!-- Main Section Marquee End -->

      </div>
      <!-- Main Section Content End -->

    </section>

@stop