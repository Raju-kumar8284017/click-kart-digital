@extends('frontend.layouts.master')

@section('meta_title', 'Best digital marketing & Website Designing Company in Patna | Click Kart Digital')

@section('meta_description', 'Click Kart Digital provides professional website designing, web development, and digital marketing services in Patna.')

@section('meta_keywords', 'digital marketing in Patna, website development, website design, click kart digital, IT company')

@section('content')
    @include('frontend.pages.industry.education.sections.banner')

    @include('frontend.pages.industry.education.sections.about')

    @include('frontend.pages.industry.education.sections.services')

    @include('frontend.pages.industry.education.sections.features')

    @include('frontend.pages.industry.education.sections.challenges')

    @include('frontend.pages.industry.education.sections.choose-us')

    @include('frontend.common.future')
@endsection