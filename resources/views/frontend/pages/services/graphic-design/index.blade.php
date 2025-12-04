@extends('frontend.layouts.master')

@section('meta_title', 'Best digital marketing & Website Designing Company in Patna | Click Kart Digital')

@section('meta_description', 'Click Kart Digital provides professional website designing, web development, and digital marketing services in Patna.')

@section('meta_keywords', 'digital marketing in Patna, website development, website design, click kart digital, IT company')

@section('content')
    
    <!-- Banner Section -->
   @include('frontend.pages.services.graphic-design.sections.banner')
   <!-- End Banner Section -->

   <!-- choosen Section -->
   @include('frontend.common.choosen')
    <!-- End choosen Section -->

    <!-- what-we-do Section -->
    @include('frontend.pages.services.graphic-design.sections.what-we-do')
    <!-- End what-we-do Section -->

    <!-- included social media Section -->
    @include('frontend.pages.services.graphic-design.sections.include-social-media')
    <!-- End included social media Section -->

    <!-- future Section -->
    @include('frontend.common.future')
    <!-- End future Section -->
@endsection