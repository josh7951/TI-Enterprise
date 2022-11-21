@extends('layouts.portal')

@section('content')
    <login forgotpassword="{{ route('password.request') }}" loginroute="{{ route('login') }}" registerroute="{{ route('register') }}"></login>
@endsection
