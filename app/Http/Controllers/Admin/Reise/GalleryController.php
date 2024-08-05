<?php

namespace App\Http\Controllers\Admin\Reise;

use App\Models\Gallery;
use App\Models\Category;
use App\Services\ImageService;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the gallery resources.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $galleries = Gallery::reise()->latest()->get();

        return view('admin.pages.reise.gallery.index', compact('galleries'));
    }

    /**
     * Display the form to create a new gallery.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        $categories = Category::reise()->latest()->get();

        return view('admin.pages.reise.gallery.create', compact('categories'));
    }

    /**
     * Store a newly created gallery resource in storage.
     *
     * @param \App\Http\Requests\Gallery\StoreGalleryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreGalleryRequest $request): RedirectResponse
    {
        $galleryDTO = $request->dataTransferObject();
        $imageService = new ImageService(
            imageRequest: $galleryDTO['image'],
            storeToFolder: 'images/reise/gallery',
            imageName: date('dmyHis'),
        );

        $galleryDTO['image'] = $imageService->executeSingleImage();

        Gallery::create($galleryDTO + ['type' => self::TYPE_AS_REISE]);

        return redirect()
            ->route('admin.reise.gallery.index')
            ->with('toastSuccess', 'Gallery created successfully');
    }

    /**
     * Display the form to edit an existing gallery.
     *
     * @param int $id The ID of the gallery to edit.
     * @return \Illuminate\Contracts\View\View The view to display the edit form.
     */
    public function edit(int $id): View
    {
        $gallery = Gallery::reise()->findOrFail($id);
        $categories = Category::reise()->latest()->get();

        return view('admin.pages.reise.gallery.edit', compact('gallery', 'categories'));
    }

    /**
     * Update an existing gallery resource.
     *
     * @param \App\Http\Requests\Gallery\UpdateGalleryRequest $request
     * @param int $id The ID of the gallery to update.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateGalleryRequest $request, int $id): RedirectResponse
    {
        $galleryDTO = $request->dataTransferObject();
        $gallery = Gallery::reise()->findOrFail($id);

        if (!is_null($galleryDTO['image'])) {
            $imageService = new ImageService(
                imageRequest: $galleryDTO['image'],
                storeToFolder: 'images/reise/gallery',
                imageName: date('dmyHis'),
            );

            $galleryDTO['image'] = $imageService->executeSingleImage();
        } else {
            $galleryDTO['image'] ??= $gallery->image;
        }

        $gallery->update($galleryDTO);

        return redirect()
            ->route('admin.reise.gallery.index')
            ->with('toastSuccess', 'Gallery updated successfully');
    }

    /**
     * Deletes a gallery resource.
     *
     * @param int $id The ID of the gallery to delete.
     * @return \Illuminate\Http\RedirectResponse A redirect response to the gallery index page with a success message.
     */
    public function destroy(int $id): RedirectResponse
    {
        $gallery = Gallery::reise()->findOrFail($id);
        $gallery->delete();

        return redirect()
            ->back()
            ->with('toastSuccess', 'Gallery deleted successfully');
    }
}
