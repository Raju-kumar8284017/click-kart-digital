<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.pages.contect.index');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string'
        ]);

        // Send Mail
        Mail::to('info@clickkartdigital.com')->send(new ContactMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
