@extends('frontend.layouts.master')

@section('content')
<!-- Hero Section -->
    @include('frontend.pages.home.section.hero')
<!-- Hero Section End -->

<!-- What We Do Section -->
    @include('frontend.pages.home.section.what-we-do')
<!-- What We Do Section End -->

<!-- Chosen By Leaders Section -->
    @include('frontend.pages.home.section.choosen')
<!-- Chosen By Leaders Section End -->

<!-- Brand With Click kart -->
    @include('frontend.pages.home.section.brand')
<!-- Brand With Click kart End-->

<!-- Award-Winning Digital Marketing Agency -->
    @include('frontend.pages.home.section.award')
<!-- Award-Winning Digital Marketing Agency End-->

<!-- Why Click Kart -->
    @include('frontend.pages.home.section.why-clickkart')
<!-- Why Click Kart End-->

<!-- Certification -->
    @include('frontend.pages.home.section.certification')
<!-- Certification End-->

<!-- Testimonial Section -->
    @include('frontend.pages.home.section.testimonial')
<!-- Testimonial Section End-->

<!-- Get In Touch Section -->
    @include('frontend.pages.home.section.get-in-tough')
<!-- Get In Touch Section End-->

<!-- Build Future Together Section -->
    {{-- @include('frontend.pages.home.section.future') --}}
<!-- Build Future Together Section End-->
@endsection