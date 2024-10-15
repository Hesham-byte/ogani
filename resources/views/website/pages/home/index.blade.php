@extends('website.layouts.layout')

@section('content')
    @include('website.components.preloader')
    @include('website.components.humberger')
    @include('website.components.header')
    @include('website.pages.home.categories')
    @include('website.pages.home.featured')
    @include('website.pages.home.banner')
    @include('website.pages.home.latest')
    @include('website.pages.home.blog')
    @include('website.components.footer')
@endsection
