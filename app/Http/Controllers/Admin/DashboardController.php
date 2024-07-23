<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard index view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('admin.pages.dashboard.index');
    }

    /**
     * Display the admin dashboard profile view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function profileView(): View
    {
        return view('admin.pages.dashboard.profile');
    }

    public function profileAction(): RedirectResponse
    {
        //
    }
}
