@extends('layouts.base')

@section('body')

@include('includes.header')

    @yield('content')
    @include('includes.footer')

@endsection
