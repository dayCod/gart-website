<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomerMessageController extends Controller
{
    public function index(): View
    {
        $customerMessages = CustomerMessage::latest()->get();

        return view('admin.pages.dashboard.customer-message.index', compact('customerMessages'));
    }
}
