@extends('frontend.layouts.master')

@section('meta_title', 'Best digital marketing & Website Designing Company in Patna | Click Kart Digital')

@section('meta_description', 'Click Kart Digital provides professional website designing, web development, and digital marketing services in Patna.')

@section('meta_keywords', 'digital marketing in Patna, website development, website design, click kart digital, IT company')

@section('content')
    @include('frontend.pages.industry.travel.sections.banner')

    @include('frontend.pages.industry.travel.sections.about')

    @include('frontend.pages.industry.travel.sections.features')

    @include('frontend.pages.industry.travel.sections.services')

    @include('frontend.pages.industry.travel.sections.challenges')

    @include('frontend.common.why-clickkart')

    @include('frontend.common.future')
@endsection