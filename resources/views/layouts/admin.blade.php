<!doctype html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6YWB4ECCWW"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());
  
      gtag('config', 'G-6YWB4ECCWW');
  </script>
  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!-- Favicon -->
  <!-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" /> -->
  
  <!-- Libs CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/libs.bundle.css') }}" />
  
  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/index.bundle.css') }}" />
  
  <!-- Title -->
  <title>KERAWA SPACE - ADMIN</title>
</head>

<body class="bg-light">

  <!-- navbar -->
  <nav id="mainNav" class="navbar navbar-expand-lg navbar-sticky navbar-light bg-light border-bottom">
    <div class="container">
      <a href="/" class="navbar-brand">KERAWA SPACE</a>
  
      <!-- secondary -->
      <ul class="navbar-nav navbar-nav-secondary order-lg-3">
        <li class="nav-item d-lg-none">
          <a class="btn btn-primary ms-2 nav-icon" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list"></span>
          </a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a href="/manageposts" class="btn btn-primary ms-2">MANAGE POSTS</a>
          @guest
            @if (Route::has('login'))
              <li class="nav-item">
                <a class="btn btn-primary ms-2" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
            @endif

            @if (Route::has('register'))
              <li class="nav-item">
                <a class="btn btn-primary ms-2" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="btn btn-primary ms-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </li>
      </ul>
    </div>
  </nav>
  
  @yield('content')

  <!-- javascript -->
  <script src="{{ asset('assets/js/vendor.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/index.bundle.js') }}"></script>
</body>

</html>
