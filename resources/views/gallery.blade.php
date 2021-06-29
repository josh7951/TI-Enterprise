@extends('layouts.base')

@section('content')
  <gallery-main :images="{{$images}}"></gallery-main>
@endsection