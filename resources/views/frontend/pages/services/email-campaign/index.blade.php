@extends('frontend.layouts.master')

@section('content')
    
<!--email campaign banner-->
@include('frontend.pages.services.email-campaign.sections.banner')
<!--email campaign banner end-->

<!--choosen by-->
@include('frontend.common.choosen')
<!--choosen by End-->

<!-- what we do -->
@include('frontend.pages.services.email-campaign.sections.what_we_do')
<!-- what we do End -->

<!--Inculcate Social Media Into Marketing-->
@include('frontend.pages.services.email-campaign.sections.include_social_media')
<!--Inculcate Social Media Into Marketing End-->

@include('frontend.common.future')

@endsection