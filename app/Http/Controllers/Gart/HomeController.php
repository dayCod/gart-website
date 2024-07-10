<?php

namespace App\Http\Controllers\Gart;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('gart.index');
    }
}
