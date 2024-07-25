<?php

namespace App\Http\Controllers\Admin\Gart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\SaveGalleryImageRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    /**
     * Renders the view for the gallery image form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function form(): View
    {
        return view('admin.pages.gart.gallery.images.form');
    }

    public function saveForm(SaveGalleryImageRequest $request): RedirectResponse
    {
        //
    }
}
