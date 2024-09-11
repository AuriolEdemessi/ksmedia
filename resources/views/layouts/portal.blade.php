<!DOCTYPE html>
<html lang="en" dir="ltr">

  
<!-- Mirrored from mixdesign.club/themeforest/ignite/index-split-portfolio-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jun 2024 19:41:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">

    <!-- Page Title-->
    <title>Kerawa Space | Home</title>

    <!-- Meta Tags-->
    <meta name="description" content="KERAWA SPACE">
    <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, light and dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="CODEO">

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Favicon & Icons Start -->
    <link rel="icon" href="img/favicon/favicon.ico" sizes="any">
    <link rel="icon" href="img/favicon/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="manifest" href="img/favicon/manifest.webmanifest">
    <!-- Template Favicon & Icons End -->

    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="KERAWA SPACE">
    <meta property="og:description" content="Aesthetic because we are !">
    <meta property="og:url" content="index.html">
    <meta property="og:image" content="favicon/og-image.html">
    <!-- Facebook Metadata End -->

    <!-- Template Styles Start -->
    <link rel="stylesheet" type="text/css" href="css/loaders/loader.css">
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Template Styles End -->

    <!-- Custom Browser Color Start -->
    <meta name="theme-color" content="#0c0c0c">
    <meta name="msapplication-navbutton-color" content="#0c0c0c">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0c0c0c">
    <!-- Custom Browser Color End -->
  </head>

  <body>

    <!-- Loader Start -->
    <div class="loader">
  <div class="loader__content">
    <div class="loader__logo">
      <img src="img/logo.png" alt="Kerawa Space" style="width: 120px; height: auto;">
    </div>
  </div>
</div>

    <!-- Loader End -->

    <!-- Navigation Start -->
    <nav id="nav" class="nav">
      <div class="nav__container">
        <!-- menu background -->
        <div class="nav__background"></div>
        <div class="nav__content text-center">
          <ul class="navigation">
            <li>
              <a id="home-trigger" class="nav__link" href="/posts">
                <span class="link-title">ARTWORKS</span>
                <span class="link-hover">ARTWORKS</span>
              </a>
            </li>
            <li>
              <a id="home-trigger" class="nav__link" href="/team">
                <span class="link-title">OUR TEAM</span>
                <span class="link-hover">OUR TEAM</span>
              </a>
            </li>
            <li>
              <a id="r" class="nav__link" href="mailto:info@kerawaspace.com">
                <span class="link-title">CONTACT US</span>
                <span class="link-hover">CONTACT US</span>
              </a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navigation End -->

    <!-- Header Start -->
    <header id="header" class="header split">
      <div class="container-fluid px-0 fullheight-mobile">
        <div class="row gx-0 fullheight-mobile">
          <div class="col-6 fullheight-mobile header__left">

            <!-- Logo Start -->
            <div class="logo" style="display: inline-block;">
                <img src="img/logo.png" alt="" style="width: 150px; height: auto;">
            </div>


            <!-- Logo End -->

          </div>
          <div class="col-6 fullheight header__right">

            <!-- Subscribe Button Start -->
            @auth
              @if(Auth::user()->type === 'admin')
            <a href="{{ url('/admin') }}" class="btn btn-s notify-trigger">
              <i class="fa-solid fa-paper-plane"></i>
              <span class="title">Admin Space</span>
              <span class="hover">Admin Space</span>
            </a>
            @else
            <a href="{{ url('/home') }}" class="btn btn-s notify-trigger">
              <i class="fa-solid fa-paper-plane"></i>
              <span class="title">My Space</span>
              <span class="hover">My Space</span>
            </a>
            @endif
            @else 
            <a href="/posts" class="btn btn-s notify-trigger">
              <i class="fa-solid fa-paper-plane"></i>
              <span class="title">OUR ARTWORKS</span>
              <span class="hover">OUR ARTWORKS</span>
            </a>
            @endauth
            <!-- Subscribe Button End -->

            <!-- Menu Trigger Start -->
            <div class="menu-button">
              <a href="#0" id="menu-trigger" class="menu-trigger">
                <span class="burger"></span>
                <span class="circle"></span>
              </a>
            </div>
            <!-- Menu Trigger End -->

          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Main Section Start -->
    @yield('content')
    
    <!-- Footer Desktop Start -->
    <footer id="footer" class="footer-desktop split">
      <div class="container-fluid px-0 fullheight">
        <div class="row gx-0 fullheight">
          <div class="col-6 footer-desktop__left fullheight">
            <div class="container-desktop d-flex fullheight justify-content-start align-items-center">
              <!-- Home screen socials links -->
              <ul class="socials">
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
          </div>
          <div class="col-6 footer-desktop__right fullheight">
            <div class="container-desktop fullheight d-flex justify-content-end align-items-center">
              <p class="copyright bright">
                <i class="fa-regular fa-copyright"></i>
                <a class="contact-link" href="" target="_blank">KERAWA SPACE</a>,
                2024
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Desktop End -->

    <!-- Notify Popup Start -->
    <div id="notify" class="popup notify">
      <div class="popup__container">

        <!-- Popup Content Start -->
        <div class="popup__content block-rounded-s">

          <!-- popup close button -->
          <a href="#0" id="notify-close" class="popup-close">
            <i class="fa-solid fa-xmark"></i>
          </a>

          <!-- Notify Popup Title Start -->
          <div class="popup-title">
            <p class="popup-title__title">Connect to your space</p>
            <p class="popup-title__text">We allow you to launch many services at the same time</p>
          </div>
          <!-- Notify Popup Title End -->

          <!-- Notify Form Container Start -->
          <div class="form-container">

          
            <!-- Reply Messages Start
            <div class="reply-group subscription-ok">
              <i class="fa-solid fa-circle-check reply-group__icon"></i>
              <p class="reply-group__title txt-light">Done!</p>
              <span class="reply-group__text">Thanks for subscribing!</span>
            </div>
            <div class="reply-group subscription-error">
              <i class="fa-solid fa-face-frown-open reply-group__icon"></i>
              <p class="reply-group__title">Ooops!</p>
              <span class="reply-group__text">Something went wrong. Please try again later.</span>
            </div>
            <!-- Reply Messages End-->

            <!-- Notify Contact Form Start-->
            <form class="form notify-form form-light" method="POST" action="{{ route('login') }}">
              <input class="margin-l" id="email" type="email" placeholder="Your Email" name="email" required>
              @error('email')
              <div class="reply-group subscription-error">
              <i class="fa-solid fa-face-frown-open reply-group__icon"></i>
              <p class="reply-group__title">Ooops!</p>
              <span class="reply-group__text">Something went wrong. Please try again..</span>
            </div>
            @enderror
            <input class="margin-l" id="password" type="password" placeholder="Your password" name="password" required>
            @error('email')
              <div class="reply-group subscription-error">
              <i class="fa-solid fa-face-frown-open reply-group__icon"></i>
              <p class="reply-group__title">Ooops!</p>
              <span class="reply-group__text">Something went wrong. Please try again..</span>
            </div>
            @enderror
              <button class="btn btn-l btn-light" type="submit">
                <span class="btn-title">Connect</span>
                <span class="btn-hover">Connect</span>
              </button>
            </form>
            <!-- Notify Contact Form End-->

            <br>
            <p class="text-center text-xl-start pb-3 mb-3">Vous êtes nouveaux par ici ? <a href="/register"><b>Inscrivez vous !</b></a></p>
            
          </div>
          <!-- Notify Form Container End -->

        </div>
        <!-- Popup Content End -->

      </div>
    </div>
    <!-- Notify Popup End -->

    <!-- Say Hello Popup Start -->
    <div id="sayhello" class="popup sayhello">
      <div class="popup__container">

        <!-- Popup Content Start -->
        <div class="popup__content block-rounded-s">

          <!-- popup close button -->
          <a href="#0" id="sayhello-close" class="popup-close">
            <i class="fa-solid fa-xmark"></i>
          </a>

          <!-- Say Hello Popup Title Start -->
          <div class="popup-title">
            <p class="popup-title__title">Let's talk!</p>
          </div>
          <!-- Say Hello Popup Title End -->

          <!-- Say Hello Form Container Start -->
          <div class="form-container">

            <!-- Reply Messages Start-->
            <div class="reply-group">
              <i class="fa-solid fa-circle-check reply-group__icon"></i>
              <p class="reply-group__title">Done!</p>
              <span class="reply-group__text">Thanks for your message. I'll get back as soon as possible</span>
            </div>
            <!-- Reply Messages End-->

            <!-- Contact Form Start -->
            <form class="form form-light sayhello-form" id="sayhello-form">
              <!-- Hidden Required Fields -->
              <input type="hidden" name="project_name" value="Ignite - Coming Soon and Landing Page Template">
              <input type="hidden" name="admin_email" value="support@mixdesign.club">
              <input type="hidden" name="form_subject" value="Contact Form Message">
              <!-- END Hidden Required Fields-->
              <div class="container-fluid px-0">
                <div class="row gx-5">
                  <div class="col-12 col-md-6">
                    <input class="" type="text" name="Name" placeholder="Your Name" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <input class="" type="text" name="Company" placeholder="Your Email" required>
                  </div>
                  <div class="col-12">
                    <textarea class="margin-l" name="Message" placeholder="A Few Words" required></textarea>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-l btn-light" type="submit">
                      <span class="btn-title">Send</span>
                      <span class="btn-hover">Send</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
            <!-- Contact Form End  -->

          </div>
          <!-- Say Hello Form Container End -->

        </div>
        <!-- Popup Content End -->

      </div>
    </div>
    <!-- Say Hello Popup End -->

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

      <!-- Background of PhotoSwipe.
      It's a separate element, as animating opacity is faster than rgba(). -->
      <div class="pswp__bg"></div>

      <!-- Slides wrapper with overflow:hidden. -->
      <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

          <div class="pswp__top-bar">

            <!--  Controls are self-explanatory. Order can be changed. -->

            <div class="pswp__counter"></div>

            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

            <button class="pswp__button pswp__button--share" title="Share"></button>

            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

            <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
            <!-- element will get class pswp__preloader-active when preloader is running -->
            <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
            </div>
          </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

      </div>

    </div>

    <!-- Load Scripts Start -->
    <script src="js/libs.min.js"></script>
    <script src="js/gallery-init.js"></script>
    <script src="js/custom.js"></script>
    <!-- Load Scripts End -->

  </body>


<!-- Mirrored from mixdesign.club/themeforest/ignite/index-split-portfolio-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jun 2024 19:41:26 GMT -->
</html>
