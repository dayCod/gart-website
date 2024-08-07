<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomerMessageController extends Controller
{
    /**
     * Display a listing of the customer messages.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $customerMessages = CustomerMessage::latest()->get();

        return view('admin.pages.dashboard.customer-message.index', compact('customerMessages'));
    }
}
