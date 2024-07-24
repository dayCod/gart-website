<?php

namespace App\Http\Controllers\Admin\Gart;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;

class GalleryController extends Controller
{
    public function index(): View
    {
        //
    }

    public function create(): View
    {
        //
    }

    public function store(StoreGalleryRequest $request): RedirectResponse
    {
        //
    }

    public function edit(int $id): View
    {
        //
    }

    public function update(UpdateGalleryRequest $request, int $id): RedirectResponse
    {
        //
    }

    public function destroy(int $id): RedirectResponse
    {
        //
    }
}
