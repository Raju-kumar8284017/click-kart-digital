@extends('frontend.layouts.master')

@section('meta_title', 'Best digital marketing & Website Designing Company in Patna | Click Kart Digital')

@section('meta_description', 'Click Kart Digital provides professional website designing, web development, and digital marketing services in Patna.')

@section('meta_keywords', 'digital marketing in Patna, website development, website design, click kart digital, IT company')

@section('content')
    
   @include('frontend.pages.services.web-dev.services.banner')

   @include('frontend.common.choosen')

   @include('frontend.pages.services.web-dev.services.what-we-do')

   @include('frontend.pages.services.web-dev.services.include-social-media')

   @include('frontend.common.future')
   
@endsection