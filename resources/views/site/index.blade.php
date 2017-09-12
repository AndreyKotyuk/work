@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@section('content')
    @include('site.jumbo')
    @include('site.pages')
    @include('site.products')
    {{--@include('site.services')--}}
    @include('site.portfolio')
    @include('site.prices')
    @include('site.conditions')
    @include('site.contact')
    {{--@include('site.google-map')--}}
@endsection

@section('footer')
    @include('site.footer')
@endsection
