<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Visitor;
use App\Models\Category;
use App\Models\Location;
use App\Models\DetailGallery;
use App\Services\ImageService;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Dashboard\ProfileRequest;
use App\Models\CustomerMessage;
use App\Models\WhatsappClick;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard index view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        // dd(Visitor::query()->delete(), CustomerMessage::query()->delete(), WhatsappClick::query()->delete(), Location::query()->delete());
        $totalCategories = Category::count();
        $totalGalleries = Gallery::count();
        $totalPictures = DetailGallery::count();
        $totalServices = Service::count();

        $totalDailyVisitors = Visitor::whereDate('created_at', Carbon::today())->count();
        $totalDailyCustomerMessages = CustomerMessage::whereDate('created_at', Carbon::today())->count();
        $totalDailyWhatsappClicks = WhatsappClick::whereDate('created_at', Carbon::today())->count();

        $dailyVisitors = array();
        $dailyCustomerMessages = array();
        $dailyWhatsappClicks = array();

        foreach (Visitor::orderBy('created_at', 'asc')->get() as $visitor) {
            $dailyVisitors[] = [
                'day' => $visitor->created_at->format('Y-m-d'),
                'count' => Visitor::whereDay('created_at', $visitor->created_at->format('d'))->count(),
            ];
        }

        foreach (CustomerMessage::orderBy('created_at', 'asc')->get() as $customerMessage) {
            $dailyCustomerMessages[] = [
                'day' => $customerMessage->created_at->format('Y-m-d'),
                'count' => CustomerMessage::whereDay('created_at', $customerMessage->created_at->format('d'))->count(),
            ];
        }

        foreach (WhatsappClick::orderBy('created_at', 'asc')->get() as $whatsappClick) {
            $dailyWhatsappClicks[] = [
                'day' => $whatsappClick->created_at->format('Y-m-d'),
                'count' => WhatsappClick::whereDay('created_at', $whatsappClick->created_at->format('d'))->count(),
            ];
        }

        $setDailyVisitors = collect($dailyVisitors)
            ->unique()
            ->sortBy(function ($item) {
                return Carbon::parse($item['day']);
            })
            ->take(Carbon::now()->format('t'));

        $setDailyCustomerMessages = collect($dailyCustomerMessages)
            ->unique()
            ->sortBy(function ($item) {
                return Carbon::parse($item['day']);
            })
            ->take(Carbon::now()->format('t'));

        $setDailyWhatsappClicks = collect($dailyWhatsappClicks)
            ->unique()
            ->sortBy(function ($item) {
                return Carbon::parse($item['day']);
            })
            ->take(Carbon::now()->format('t'));

        // dd(
        //     $setDailyWhatsappClicks->values()->all(),
        //     $setDailyVisitors->values()->all(),
        //     $setDailyCustomerMessages->values()->all()
        // );

        return view('admin.pages.dashboard.index', [
            'totalCategories' => $totalCategories,
            'totalGalleries' => $totalGalleries,
            'totalPictures' => $totalPictures,
            'totalServices' => $totalServices,
            'totalDailyVisitors' => $totalDailyVisitors,
            'totalDailyCustomerMessages' => $totalDailyCustomerMessages,
            'totalDailyWhatsappClicks' => $totalDailyWhatsappClicks,
            'setDailyVisitors' => $setDailyVisitors->values()->all(),
            'setDailyCustomerMessages' => $setDailyCustomerMessages->values()->all(),
            'setDailyWhatsappClicks' => $setDailyWhatsappClicks->values()->all(),
        ]);
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

    /**
     * Updates the authenticated user's profile information, including their profile image.
     *
     * @param \App\Http\Requests\Dashboard\ProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function profileAction(ProfileRequest $request): RedirectResponse
    {
        $profileDTO = $request->dataTransferObject();
        $user = User::find(Auth::id());

        if (!is_null($profileDTO['image'])) {
            $imageService = new ImageService(
                imageRequest: $profileDTO['image'],
                storeToFolder: 'images/profile/',
                imageName: date('dmyHis'),
            );

            $profileDTO['image'] = $imageService->executeSingleImage();
        } else {
            $profileDTO['image'] ??= $user->image;
        }

        $profileDTO['password'] ??= $user->password;

        $user->update($profileDTO);

        return redirect()
            ->back()
            ->with('toastSuccess', 'Profile updated successfully');
    }

    /**
     * Displays the location details view for the specified location ID.
     *
     * @param int $modelId The Model ID of the location to display.
     * @return \Illuminate\Contracts\View\View The view containing the location details.
     */
    public function location(int $modelId): View
    {
        $location = Location::where('model_id', $modelId)->first();
        $gmapsLocation = "https://www.google.com/maps/place/{$location->latitude}, {$location->longitude}/";

        return view('admin.pages.dashboard.location', compact('location', 'gmapsLocation'));
    }
}
