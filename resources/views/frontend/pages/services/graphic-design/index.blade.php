@extends('frontend.layouts.master')

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