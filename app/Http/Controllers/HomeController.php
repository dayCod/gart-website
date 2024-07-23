<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('welcome');
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
