<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontIndustriesController extends Controller
{
    public function eCommerce()
    {
        return view('frontend.pages.industry.e-commerce.index');
    }

    public function corporate()
    {
        return view('frontend.pages.industry.corporate.index');
    }

    public function education()
    {
        return view('frontend.pages.industry.education.index');
    }

    public function fashion()
    {
        return view('frontend.pages.industry.fashion.index');
    }

    public function finance()
    {
        return view('frontend.pages.industry.finance.index');
    }

    public function food()
    {
        return view('frontend.pages.industry.food.index');
    }

    public function healthcare()
    {
        return view('frontend.pages.industry.healthcare.index');
    }

    public function realEstate()
    {
        return view('frontend.pages.industry.real-estate.index');
    }

    public function travel()
    {
        return view('frontend.pages.industry.travel.index');
    }
}
