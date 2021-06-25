@extends('layouts.base')

@section('content')
<nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="/">Home</a></li>
    <li class="is-active"><a href="#" aria-current="page">Gallery</a></li>
  </ul>
</nav>
<section class="hero is-medium is-success is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title is-1" style="text-align:center;">Gallery Coming Soon!</h1>
    </div>
  </div>
</section>
<!-- <login forgotpassword="{{ route('password.request') }}"></login> -->
@endsection