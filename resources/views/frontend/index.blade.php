@extends('frontend.main_master')
@section('main')

@section('title')
Главная | Блог Владислава Озоровского
@endsection

<!-- banner-area -->
@include('frontend.home_all.home_slide')
<!-- banner-area-end -->

<!-- about-area -->
@include('frontend.home_all.home_about')
<!-- about-area-end -->

<!-- portfolio-area -->
@include('frontend.home_all.portfolio')
<!-- portfolio-area-end -->

<!-- blog-area -->
@include('frontend.home_all.home_blog')
<!-- blog-area-end -->

@endsection
