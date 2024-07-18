<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\IndexHomePage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $indexHomeData = IndexHomePage::first();

        return view('welcome', compact('indexHomeData'));
    }

    /**
     * @return View
     */
    public function aboutUs(): View
    {
        $aboutUsData = AboutUs::first();

        return view('about-us', compact('aboutUsData'));
    }

    /**
     * @return View
     */
    public function aboutMe(): View
    {
        return view('about-me');
    }

    /**
     * @return View
     */
    public function contactUs(): View
    {
        return view('contact');
    }
}
