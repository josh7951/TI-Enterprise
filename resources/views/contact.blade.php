@extends('layouts.base')

@section('content')
  <contact-content csrf="{{csrf_token()}}"></contact-content>
@endsection