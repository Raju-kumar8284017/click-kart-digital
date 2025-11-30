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
}
