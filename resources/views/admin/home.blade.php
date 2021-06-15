@extends('layouts.dash')

@section('content')
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
    <div id="something" class="dash-content">
      <div class="box section is-medium">
        Something goes here idk what yet
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
@endsection