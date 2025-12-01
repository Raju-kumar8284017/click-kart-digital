@extends('frontend.layouts.master')

@section('content')
    @include('frontend.pages.industry.healthcare.sections.banner')

    @include('frontend.pages.industry.healthcare.sections.about')

    @include('frontend.pages.industry.healthcare.sections.services')    

    @include('frontend.pages.industry.healthcare.sections.features')

    @include('frontend.pages.industry.healthcare.sections.challenges')

    @include('frontend.common.why-clickkart')

    @include('frontend.common.future')
@endsection