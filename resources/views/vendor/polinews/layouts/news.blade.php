@extends('layouts.base')
@section('container-width', 'max-w-7xl')
@section('content')
    @yield('news-content')
@endsection
@push('styles')
<link href="{{ asset('vendor/polinews/polinews.css') }}" rel="stylesheet">
@endpush
