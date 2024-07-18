<?php

namespace App\Http\Controllers;

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
        return view('about-us');
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
