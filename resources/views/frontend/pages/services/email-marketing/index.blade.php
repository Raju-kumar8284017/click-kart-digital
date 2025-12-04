@extends('frontend.layouts.master')

@section('meta_title', 'Best digital marketing & Website Designing Company in Patna | Click Kart Digital')

@section('meta_description', 'Click Kart Digital provides professional website designing, web development, and digital marketing services in Patna.')

@section('meta_keywords', 'digital marketing in Patna, website development, website design, click kart digital, IT company')

@section('content')
    
<!--email campaign banner-->
@include('frontend.pages.services.email-marketing.sections.banner')
<!--email campaign banner end-->

<!--choosen by-->
@include('frontend.common.choosen')
<!--choosen by End-->

<!-- what we do -->
@include('frontend.pages.services.email-marketing.sections.what_we_do')
<!-- what we do End -->

<!--Inculcate Social Media Into Marketing-->
@include('frontend.pages.services.email-marketing.sections.include_social_media')
<!--Inculcate Social Media Into Marketing End-->

@include('frontend.common.future')

@endsection