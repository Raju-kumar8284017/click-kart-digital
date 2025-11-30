@extends('frontend.layouts.master')

@section('content')
    
    @include('frontend.pages.services.seo.sections.banner')

    @include('frontend.common.choosen')

    @include('frontend.pages.services.seo.sections.what_we_do')

    @include('frontend.pages.services.seo.sections.include_social_media')

    @include('frontend.common.future')

@endsection