@extends('frontend.layouts.master')

@section('content')
    @include('frontend.pages.price.sections.banner')

    @include('frontend.pages.price.sections.about')

    @include('frontend.pages.price.sections.plans')
    
    @include('frontend.pages.price.sections.features')

    @include('frontend.common.why-clickkart')

    @include('frontend.common.future')

@endsection