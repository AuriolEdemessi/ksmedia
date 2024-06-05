<!doctype html>
<!--
Website By Miradontsoa / MiVFX
http://twitter.com/miradontsoa
http://miradontsoa.com
-->

<html class="no-js" lang="en">


<!-- Mirrored from demo.highhay.com/agenci/index-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Aug 2022 13:32:59 GMT -->
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Page Title Here -->
  <title>Kerawa Space | Home</title>

  <!-- Meta -->
  <!-- Page Description Here -->
  <meta name="description" content="A beautiful and creative portfolio template. It is mobile friend (responsive) and comes with smooth animations">

  <!-- Disable screen scaling-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Twitter Meta -->
  <meta name="twitter:site" content="@miradontsoa">
  <meta name="twitter:creator" content="@miradontsoa">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Page Title">
  <meta name="twitter:description" content="Description of the page">
  <meta name="twitter:image" content="../img/bg-default.html">

  <!-- Facebook Meta -->
  <meta property="og:url" content="your website url here">
  <meta property="og:title" content="Page Title">
  <meta property="og:description" content="Description of the page">
  <meta property="og:type" content="website">
  <meta property="og:image" content="../img/bg-default.html">
  <meta property="og:image:secure_url" content="../img/bg-default.html">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- Web fonts and Web Icons -->
  <link rel="stylesheet" href="portal/fonts/notosans/stylesheet.css">
  <link rel="stylesheet" href="portal/fonts/glacial/stylesheet.css">
  <link rel="stylesheet" href="portal/fonts/montserrat/stylesheet.css">
  <link rel="stylesheet" href="portal/fonts/playfair/stylesheet.css">
  <link rel="stylesheet" href="portal/fonts/ionicons.min.css">
  <link rel="stylesheet" href="portal/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="indestructibletype.com/fonts/Jost.css" type="text/css"
  charset="utf-8" />

  <!-- Vendor CSS style -->
  <link rel="stylesheet" href="portal/css/pageloader.css">

  <!-- Uncomment below to load individualy vendor CSS -->
  <link rel="stylesheet" href="portal/css/bootstrap.min.css">
  <link rel="stylesheet" href="portal/js/vendor/swiper.min.css">
  <link rel="stylesheet" href="portal/js/vendor/jquery.fullpage.min.css">
  <link rel="stylesheet" href="portal/js/vegas/vegas.min.css">

  <!-- Main CSS files -->
  <link rel="stylesheet" href="portal/css/main.css">

  <!-- add alt layout here -->
  <link rel="stylesheet" href="portal/css/style-bg.css">

  <script src="portal/js/vendor/modernizr-2.7.1.min.js"></script>
</head>

<body id="menu" class="body-page">
  <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <!-- Page Loader : just comment these lines to remove it -->
  <div class="page-loader" id="page-loader">
    <div>
      <!--<div class="icon ion-spin"></div>-->
      <p>AESTHETIC <br> BECAUSE <br> WE ARE</p>
    </div>
  </div>

  <!-- BEGIN OF site header Menu -->
  <header class="page-header navbar page-header-drawer menu-right logo-left topmenu-right ">

    <!-- Begin of menu icon toggler -->
    <button class="navbar-toggler site-menu-icon" id="navMenuIcon">
      <!-- Available class : menu-icon-dot / menu-icon-line-->
      <span class="menu-icon menu-icon-line">
        <span class="text show-menu-visible">Close</span>
        <span class="text hide-menu-visible">Home</span>
        <span class="bars">
          <span class="bar1"></span>
          <span class="bar2"></span>
          <span class="bar3"></span>
        </span>
      </span>
    </button>
    <!-- End of menu icon toggler -->

    <!-- Begin of logo/brand -->
    <a class="navbar-brand" href="index-2.html#">
      <!-- Arrows scroll down/up -->
      <span class="logo">
        <!--<img class="light-logo" src="iconw.png" alt="Logo">--><img class="light-logo" src="logowhite.png" alt="Logo">
      </span>
      <span class="text">
        <span class="line"></span>
		
      </span>
    </a>
    <!-- End of logo/brand -->

    <!-- begin of menu wrapper -->
    <div class="all-menu-wrapper" id="navbarMenu">

      <!-- Begin of hamburger mainmenu menu -->
      <nav class="navbar-mainmenu">
        <div class="mainmenu-bg"></div>
        <div class="mainmenu-content">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/artworks">Artworks
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/exhibitions">Exhibitions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            @if (Route::has('login'))
            <li class="nav-item">
            @auth
              <a class="nav-link" href="{{ url('/home') }}">Your Space</a>
              @else
              <a class="nav-link" href="{{ route('login') }}">Join Us.</a>
              
            @endauth
            </li>
            @endif
          </ul>
          <!--<div class="navbar-desc">
            <div class="row">
              <div class="col col-12 col-lg-8">
                <p>This is our moto and it is just a placeholder text.
                </p>
              </div>
            </div>
          </div>-->
          <div class="navbar-footer">
            <div class="row no-gutters">
              <div class="col col-12 col-md-6">
                <div class="icons icons-margin">
                  <a class="btn-icon" href="#">
                    <i class="icon fa fa-instagram"></i>
                  </a>
                  <a class="btn-icon" href="#">
                    <i class="icon fa fa-twitter"></i>
                  </a>
                </div>
              </div>
              <div class="col col-12 col-md-6 footer-notes">
                <p class="text-right">Copyright - KERAWA SPACE. 2024</p>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- End of hamburger mainmenu menu -->


    </div>
    <!-- end of menu wrapper -->

  </header>
  <!-- END OF site header Menu-->

  <!-- BEGIN OF page cover -->
  <div class="page-cover">
    <!-- Cover Background -->
    <div class="cover-bg bg-img" data-image-src="img/bg-default.jpg"></div>

    <!--BEGIN OF Static video bg - uncomment below to use Video as Background-->
    <div id="container" class="video-container d-none d-sm-block" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; z-index: -1;">
      <video autoplay loop muted style="position: absolute; top: 50%; left: 50%; width: auto; height: auto; min-width: 100%; min-height: 100%; transform: translate(-50%, -50%);">
        <source src="videos/hero.mp4" type="video/mp4">
      </video>
    </div>


    <!--END OF Static video bg-->

    <!--BEGIN OF Youtube video bg  - uncomment/comment below to use/or not Youtube Video as Background-->
    <!--<div class='youtube-container video-container show-for-medium-up'>
				<iframe frameborder="0"
				src="https://youtube.com/embed/wqeuYB7KMhY?autoplay=1&controls=0&showinfo=0&autohide=1">
				</iframe>
			</div>-->
    <!--END OF Youtube video bg-->

    <!-- Transluscent mask as filter -->
    <div class="cover-bg-mask bg-color" data-bgcolor="rgba(29, 29, 29, 0.2)"></div>
  </div>
  <!--END OF page cover -->

  <!-- BEGIN OF page main content -->
  @yield('content')
  <!-- END OF page main content -->

  <!-- BEGIN OF page footer -->
  
  <!-- END OF site footer -->

  <!-- scripts -->
  <!-- All Javascript plugins goes here -->
  <script src="portal/js/vendor/jquery-1.12.4.min.js"></script>

  <!-- All vendor scripts -->
  <script src="portal/js/vendor/scrolloverflow.min.js"></script>
  <script src="portal/js/vendor/all.js"></script>
  <script src="portal/js/particlejs/particles.min.js"></script>

  <!-- Countdown script -->
  <script src="portal/js/jquery.downCount.js"></script>

  <!-- Form script -->
  <script src="portal/js/form_script.js"></script>

  <!-- Javascript main files -->
  <script src="portal/js/main.js"></script>


</body>


</html>