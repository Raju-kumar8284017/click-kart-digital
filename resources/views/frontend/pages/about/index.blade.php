@extends('frontend.layouts.master')

@section('content')
    
     @include('frontend.pages.about.sections.banner')

     @include('frontend.common.choosen')

     @include('frontend.common.why-clickkart')

     {{-- @include('frontend.common.award') --}}

     @include('frontend.common.certification')

     @include('frontend.common.counter')

     @include('frontend.common.testimonial')

     @include('frontend.common.future')
@endsection