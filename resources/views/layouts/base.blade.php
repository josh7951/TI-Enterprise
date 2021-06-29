<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TI-Enterprise</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="\css\mystyles.min.css">
    <link rel="stylesheet" href="\css\glider.css">
    <link rel="stylesheet" href="\css\gallery.css">
    <link rel="icon" href="\images\LOGO\True-Image-Logo-V1.png">
  </head>
  <body>
  
      <div id="app">
        <navbar></navbar>
        <div class="container">
          @yield('content')
        </div>
      </div>

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        Copyright &copy; 2021 - All Rights reserved - TI-Enterprise.com
      </p>
    </div>
  </footer>
    <script src="\js\jquery-3.6.0.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="\js\app.js"></script>
    <script src="\js\glider.min.js"></script>
    <script src="\js\home.js"></script>
  </body>
</html>