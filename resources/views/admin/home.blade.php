@extends('layouts.dash')

@section('content')
  <main class="column" style="margin: 10px 20px 10px 20px">
    <!-- Main Dashboard Content -->
    <div id="dashboard" class="dash-content">
      <div class="box">
        <h1 class="title">Welcome back, {{ Auth::user()->name }}!</h1>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Dashboard') }}</div>

              <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif

                {{ __('You are logged in test 1!') }}
                Google Analytics Stuff will go here
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Tournament Content-->
    <div id="tournament" class="dash-content">
      <div class="box section is-medium">
        Tournment Schedule editor form goes here
      </div>
    </div>
    <!-- Main Dashboard Content -->
    <div id="settings" class="dash-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Dashboard') }}</div>

              <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif

                {{ __('You are logged in test 3!') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
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