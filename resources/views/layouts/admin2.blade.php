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
  
  
  @yield('content')

  <!-- javascript -->
  <script src="{{ asset('assets/js/vendor.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/index.bundle.js') }}"></script>
</body>

</html>
