<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhatsappClick;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WhatsappClickController extends Controller
{
    /**
     * Display a listing of the Whatsapp Click records.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $waclicks = WhatsappClick::latest()->get();

        return view('admin.pages.dashboard.waclick.index', compact('waclicks'));
    }
}
