<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Renders the welcome view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('welcome');
    }

    /**
     * Renders the "about-us" view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function aboutUs(): View
    {
        return view('about-us');
    }

    /**
     * Renders the "about-me" view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function aboutMe(): View
    {
        return view('about-me');
    }

    /**
     * Renders the "contact" view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function contactUs(): View
    {
        return view('contact');
    }
}
