@extends('layouts.portal')

@section('content')

<!-- Main Section Start -->
<section id="main" class="main full">
      <div class="fullscreen-wrapper">

        <!-- Fullscreen Background Start-->
        <div class="fullscreen-bg media-full-1">
          <!-- local video background -->
          <div class="video-background">
            <video id="main-video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="img/backgrounds/1920x1080-video-1.webp">
              <source type="video/mp4" src="video/hero.mp4">
             
            </video>
          </div>
          <!-- Dark gradient cover layer -->
          <div class="color-layer layer-dark-03"></div>
        </div>
        <!-- Fullscreen Background End-->

        <!-- Main Section Content Start -->
        <div class="main__content fullheight-mobile">
          <div class="container-fluid px-0 fullheight-mobile">
            <div class="row gx-0 fullheight-mobile">

              <!-- Main Section Intro Start -->
              <div class="col-12 main__intro fullheight-mobile">

                <!-- Main Intro Content Start -->
                <div class="intro__content fullheight-mobile">

                  <!-- Headline Start -->
                  <div id="headline" class="headline centered-mobile text-center">
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="d-md-flex align-items-md-center justify-content-md-center">
                      <h1 class="headline__title title-centered">Aesthetic because we are !</h1>
                      
                    </div>
                    <div class="headline__btnholder">
                      <a href="/posts" id="notify-trigger" class="btn btn-l btn-light">
                        <span class="btn-title">Our artworks</span>
                        <span class="btn-hover">Our artworks</span>
                      </a>
                      <a  href="" id="showreel-trigger" class="btn btn-l-icon btn-outline-light">
                        <span class="btn-icon-title">Discover us</span>
                        <span class="btn-icon-anim"><i class="fa-solid fa-play"></i></span>
                      </a>
                    </div>
                  </div>
                  <!-- Headline End -->

                </div>
                <!-- Main Intro Content End -->

                <!-- Footer Mobile Start -->
                <div class="footer-mobile full">
                  <div class="container-mobile fullheight-mobile d-flex align-items-center">
                    <div class="container-fluid px-0">
                      <div class="row gx-0">
                        <div class="col-6 text-start footer-mobile__socials">
                          <!-- Home screen socials links -->
                          <ul class="socials d-flex align-items-start">
                            <li>
                              <a class="btn btn-s-text" href="https://www.facebook.com/" target="_blank">
                                <span class="title">Fb</span>
                                <span class="hover">Fb</span>
                              </a>
                            </li>
                            <li>
                              <a class="btn btn-s-text" href="https://www.instagram.com/" target="_blank">
                                <span class="title">In</span>
                                <span class="hover">In</span>
                              </a>
                            </li>
                            <li>
                              <a class="btn btn-s-text" href="https://twitter.com/" target="_blank">
                                <span class="title">Tw</span>
                                <span class="hover">Tw</span>
                              </a>
                            </li>
                            <li>
                              <a class="btn btn-s-text" href="https://www.behance.net/" target="_blank">
                                <span class="title">Be</span>
                                <span class="hover">Be</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-6 text-end footer-mobile__copyright">
                          <p class="copyright bright">
                            <i class="fa-regular fa-copyright"></i>
                            <a class="contact-link" href="/" target="_blank">KERAWA SPACE</a>,
                            2024
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- Footer Mobile End -->

              </div>
              <!-- Main Section Intro End -->

            </div>
          </div>
        </div>
        <!-- Main Section Content End -->

      </div>
    </section>
    <!-- Main Section End -->



@stop