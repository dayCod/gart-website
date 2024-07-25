<?php

namespace App\Http\Controllers\Admin\Gart;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\ImageService;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;

class GalleryController extends Controller
{
    public function index(): View
    {
        $galleries  = Gallery::gart()->latest()->get();

        return view('admin.pages.gart.gallery.index', compact('galleries'));
    }

    public function create(): View
    {
        $categories = Category::gart()->latest()->get();

        return view('admin.pages.gart.gallery.create', compact('categories'));
    }

    public function store(StoreGalleryRequest $request): RedirectResponse
    {
        $galleryDTO = $request->dataTransferObject();
        $imageService = new ImageService(
            imageRequest: $galleryDTO['image'],
            storeToFolder: 'images/gart/gallery',
            imageName: date('dmyHis'),
        );

        $galleryDTO['image'] = $imageService->executeSingleImage();

        Gallery::create($galleryDTO + ['type' => self::TYPE_AS_GART]);

        return redirect()
            ->route('admin.gart.gallery.index')
            ->with('toastSuccess', 'Gallery created successfully');
    }

    public function edit(int $id): View
    {
        $gallery = Gallery::gart()->findOrFail($id);
        $categories = Category::gart()->latest()->get();

        return view('admin.pages.gart.gallery.edit', compact('gallery', 'categories'));
    }

    public function update(UpdateGalleryRequest $request, int $id): RedirectResponse
    {
        $galleryDTO = $request->dataTransferObject();
        $gallery = Gallery::gart()->findOrFail($id);

        if (!is_null($galleryDTO['image'])) {
            $imageService = new ImageService(
                imageRequest: $galleryDTO['image'],
                storeToFolder: 'images/gart/gallery',
                imageName: date('dmyHis'),
            );

            $galleryDTO['image'] = $imageService->executeSingleImage();
        } else {
            $galleryDTO['image'] ??= $gallery->image;
        }

        $gallery->update($galleryDTO);

        return redirect()
            ->route('admin.gart.gallery.index')
            ->with('toastSuccess', 'Gallery updated successfully');
    }

    public function destroy(int $id): RedirectResponse
    {
        $gallery = Gallery::gart()->findOrFail($id);
        $gallery->delete();

        return redirect()
            ->back()
            ->with('toastSuccess', 'Gallery deleted successfully');
    }
}
