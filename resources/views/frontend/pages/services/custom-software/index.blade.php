@extends('frontend.layouts.master')

@section('content')

<!--custom software banner-->
@include('frontend.pages.services.custom-software.sections.banner')
<!--custom software banner end-->

<!--choosen by-->
@include('frontend.common.choosen')
<!--choosen by End-->

<!-- what we do -->
@include('frontend.pages.services.custom-software.sections.what_we_do')
<!-- what we do End -->

<!--Inculcate Social Media Into Marketing-->
@include('frontend.pages.services.custom-software.sections.social_media')
<!--Inculcate Social Media Into Marketing End-->



    
@endsection