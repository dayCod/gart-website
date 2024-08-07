<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WebsiteVisitorController extends Controller
{
    /**
     * Display a listing of the website visitors.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $visitors = Visitor::latest()->get();

        return view('admin.pages.dashboard.website-visitor.index', compact('visitors'));
    }
}
