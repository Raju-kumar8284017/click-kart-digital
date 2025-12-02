@extends('frontend.layouts.master')

@section('content')
<!-- Hero Section -->
    @include('frontend.pages.home.section.hero')
<!-- Hero Section End -->

<!-- What We Do Section -->
    @include('frontend.pages.home.section.what-we-do')
<!-- What We Do Section End -->

<!-- Chosen By Leaders Section -->
    @include('frontend.common.choosen')
<!-- Chosen By Leaders Section End -->

<!-- Brand With Click kart -->
    @include('frontend.pages.home.section.brand')
<!-- Brand With Click kart End-->

<!-- Award-Winning Digital Marketing Agency -->
    {{-- @include('frontend.common.award') --}}
<!-- Award-Winning Digital Marketing Agency End-->

<!-- Why Click Kart -->
    @include('frontend.common.why-clickkart')
<!-- Why Click Kart End-->

<!-- Certification -->
    @include('frontend.common.certification')
<!-- Certification End-->

<!-- Testimonial Section -->
    @include('frontend.common.testimonial')
<!-- Testimonial Section End-->

    @include('frontend.pages.home.section.faqs')

<!-- Get In Touch Section -->
    @include('frontend.pages.home.section.get-in-tough')
<!-- Get In Touch Section End-->


<!-- Build Future Together Section -->
    @include('frontend.common.future')
<!-- Build Future Together Section End-->
@endsection