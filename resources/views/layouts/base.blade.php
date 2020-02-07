<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TI-Enterprise</title>
    <link rel="stylesheet" href="\bulma\css\bulma.css">
  </head>
  <body>
      @include('layouts.navbar')

      <div id="app" class="container">
        @yield('content')
      </div>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="\js\app.js"></script>
  </body>
</html>