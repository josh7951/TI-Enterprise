<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TI Admin Panel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="\js\dashboard.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <style>
  .submenu-list {
    max-height: 0;
    overflow: hidden;
    transition: all 0.2s ease-in-out;
  }

  .menu-list li ul {
    margin-left: 0.75em !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .aside {
    background-color: #354052;
    margin-right: -10px;
  }

  .aside .main {
    padding: 40px;
    color: #6F7B7E;
  }

  .aside .title {
    color: #6F7B7E;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
  }

  .aside .main .item {
    display: block;
    padding: 10px 0;
    color: #6F7B7E;
  }

  .aside .main .item.active {
    color: #F6F7F7 !important;
  }

  .aside .main .icon {
    font-size: 19px;
    padding-right: 30px;
  }

  .aside .main .name {
    color: #6F7B7E !important;
    font-size: 16px;
    font-weight: bold;
  }

  .dash-content {
    display: none;
  }

  .display-dash-content {
    display: block;
    margin-top: 24px;
  }

  .pulsating-text {
    -webkit-animation: pulsate 3s ease-out;
    -webkit-animation-iteration-count: infinite;
    opacity: 0.5;
    font-weight: 700;
  }

  @-webkit-keyframes pulsate {
    0% {
      opacity: 0.5;
    }

    50% {
      opacity: 1.0;
    }

    100% {
      opacity: 0.5;
    }
  }

  .tutorial-msg {
    display: flex;
  }

  .blob {
    background: black;
    border-radius: 50%;
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 1);
    margin: 10px;
    height: 20px;
    width: 20px;
    transform: scale(1);
    animation: pulse-black 3s infinite;
  }

  .blob.blue {
    background: rgba(52, 172, 224, 1);
    box-shadow: 0 0 0 0 rgba(52, 172, 224, 1);
    animation: pulse-blue 3s infinite;
  }

  @keyframes pulse-blue {
    0% {
      transform: scale(0.95);
      box-shadow: 0 0 0 0 rgba(52, 172, 224, 0.7);
    }

    70% {
      transform: scale(1);
      box-shadow: 0 0 0 10px rgba(52, 172, 224, 0);
    }

    100% {
      transform: scale(0.95);
      box-shadow: 0 0 0 0 rgba(52, 172, 224, 0);
    }
  }
</style>
</head>
<body>
    <div id="app">
    <dashbar :user="{{ Auth::user() }}" route="{{ route('logout') }}" csrf="{{csrf_token()}}"></dashbar>
    <div class="columns">
        <aside-menu :user="{{ Auth::user() }}" route="{{ route('logout') }}" csrf="{{csrf_token()}}"></aside-menu>
        <main class="column" style="margin: 10px 20px 10px 20px">
        @yield('content')
        </main>
    </div>
</body>
</html>
