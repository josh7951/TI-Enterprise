@extends('layouts.portal')

@section('content')
    <forgot-pass recoveryroute="{{ route('password.email') }}" loginroute="{{ route('login') }}"></forgot-pass>
@endsection