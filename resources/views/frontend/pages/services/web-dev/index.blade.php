@extends('frontend.layouts.master')

@section('content')
    
   @include('frontend.pages.services.web-dev.services.banner')

   @include('frontend.common.choosen')

   @include('frontend.pages.services.web-dev.services.what-we-do')

   @include('frontend.pages.services.web-dev.services.include-social-media')

   @include('frontend.common.future')
   
@endsection