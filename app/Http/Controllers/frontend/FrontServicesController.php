<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontServicesController extends Controller
{
    public function index()
    {
        return view('frontend.pages.services.custom-software.index');
    }

    public function emailCampaign()
    {
        return view('frontend.pages.services.email-campaign.index');
    }

    public function graphicDesign()
    {
        return view('frontend.pages.services.graphic-design.index');
    }

    public function mobApp()
    {
        return view('frontend.pages.services.mobile-app.index');
    }

    public function seo()
    {
        return view('frontend.pages.services.seo.index');
    }

    public function socialMedia()
    {
        return view('frontend.pages.services.social-media.index');
    }

    public function uiUxDesign()
    {
        return view('frontend.pages.services.ui-ux-design.index');
    }

    public function webDesign()
    {
        return view('frontend.pages.services.web-design.index');
    }
}
