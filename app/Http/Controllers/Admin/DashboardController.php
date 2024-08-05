<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Dashboard\ProfileRequest;
use App\Services\ImageService;

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
}
