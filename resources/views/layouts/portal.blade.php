<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Kerawa Space | Home</title>
  <meta name="description" content="A beautiful and creative portfolio template. It is mobile friend (responsive) and comes with smooth animations">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Twitter Meta -->
  <meta name="twitter:site" content="@miradontsoa">
  <meta name="twitter:creator" content="@miradontsoa">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Page Title">
  <meta name="twitter:description" content="Description of the page">
  <meta name="twitter:image" content="{{ asset('img/bg-default.html') }}">

  <!-- Facebook Meta -->
  <meta property="og:url" content="your website url here">
  <meta property="og:title" content="Page Title">
  <meta property="og:description" content="Description of the page">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{ asset('img/bg-default.html') }}">
  <meta property="og:image:secure_url" content="{{ asset('img/bg-default.html') }}">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Web fonts and Web Icons -->
  <link rel="stylesheet" href="{{ asset('portal/fonts/notosans/stylesheet.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/fonts/glacial/stylesheet.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/fonts/montserrat/stylesheet.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/fonts/playfair/stylesheet.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/fonts/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/fonts/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('indestructibletype.com/fonts/Jost.css') }}" type="text/css" charset="utf-8" />

  <!-- Vendor CSS style -->
  <link rel="stylesheet" href="{{ asset('portal/css/pageloader.css') }}">

  <!-- Uncomment below to load individually vendor CSS -->
  <link rel="stylesheet" href="{{ asset('portal/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/js/vendor/swiper.min.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/js/vendor/jquery.fullpage.min.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/js/vegas/vegas.min.css') }}">

  <!-- Main CSS files -->
  <link rel="stylesheet" href="{{ asset('portal/css/main.css') }}">

  <!-- add alt layout here -->
  <link rel="stylesheet" href="{{ asset('portal/css/style-bg.css') }}">

  <script src="{{ asset('portal/js/vendor/modernizr-2.7.1.min.js') }}"></script>
</head>

<body id="menu" class="body-page">
  <div class="page-loader" id="page-loader">
    <div>
      <p>AESTHETIC <br> BECAUSE <br> WE ARE</p>
    </div>
  </div>

  <header class="page-header navbar page-header-drawer menu-right logo-left topmenu-right ">
    <button class="navbar-toggler site-menu-icon" id="navMenuIcon">
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
    <a class="navbar-brand" href="#">
      <span class="logo">
        <img class="light-logo" src="{{ asset('logowhite.png') }}" alt="Logo">
      </span>
    </a>

    <div class="all-menu-wrapper" id="navbarMenu">
      <nav class="navbar-mainmenu">
        <div class="mainmenu-bg"></div>
        <div class="mainmenu-content">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/artworks">Artworks</a>
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
    </div>
  </header>

  <div class="page-cover">
    <div class="cover-bg bg-img" data-image-src="{{ asset('img/bg-default.jpg') }}"></div>
    <div id="container" class="video-container d-none d-sm-block" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; z-index: -1;">
      <video autoplay loop muted style="position: absolute; top: 50%; left: 50%; width: auto; height: auto; min-width: 100%; min-height: 100%; transform: translate(-50%, -50%);">
        <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="cover-bg-mask bg-color" data-bgcolor="rgba(29, 29, 29, 0.2)"></div>
  </div>

  @yield('content')

  <script src="{{ asset('portal/js/vendor/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('portal/js/vendor/scrolloverflow.min.js') }}"></script>
  <script src="{{ asset('portal/js/vendor/all.js') }}"></script>
  <script src="{{ asset('portal/js/particlejs/particles.min.js') }}"></script>
  <script src="{{ asset('portal/js/jquery.downCount.js') }}"></script>
  <script src="{{ asset('portal/js/form_script.js') }}"></script>
  <script src="{{ asset('portal/js/main.js') }}"></script>
</body>
</html>
