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
        $customerMessageModel = CustomerMessage::query();
        $customerMessages = $customerMessageModel
            ->latest()
            ->whereDate('created_at', '>', now()->subDays(7))
            ->get();
        $countGartStudioInteraction = CustomerMessage::where('type', 'gart')
            ->whereDate('created_at', '>', now()->subDays(7))
            ->count();
        $countReiseStoriesInteraction = CustomerMessage::where('type', 'reise')
            ->whereDate('created_at', '>', now()->subDays(7))
            ->count();

        return view('admin.pages.dashboard.customer-message.index', compact('customerMessages', 'countGartStudioInteraction', 'countReiseStoriesInteraction'));
    }
}
