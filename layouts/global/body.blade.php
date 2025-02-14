@extends('global.html')

@push('meta')
{{-- GA --}}
@endpush

@section('superbody')
@section('header')
    @include('main-header')
@show

@section('body')
@yield('content', $content ?? 'Content')
@show

@section('footer')
    @include('main-footer')
@show
@stop
