@extends('layouts.base')

@section('content')
  <contact-content csrf="{{csrf_token()}}" route="{{route('contact.store')}}"></contact-content>
@endsection