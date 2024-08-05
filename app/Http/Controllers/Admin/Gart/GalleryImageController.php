<?php

namespace App\Http\Controllers\Admin\Gart;

use App\Models\Gallery;
use App\Models\DetailGallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Gallery\SaveGalleryImageRequest;

class GalleryImageController extends Controller
{
    /**
     * Renders the view for the gallery image form.
     *
     * @param int $id The ID of the gallery to display the images for.
     * @return \Illuminate\Contracts\View\View The view for the gallery image form.
     */
    public function form(int $id): View
    {
        $pictures = DetailGallery::where('gallery_id', $id)->orderBy('id', 'asc')->get();

        return view('admin.pages.gart.gallery.images.form', [
            'gallery_id' => $id,
            'pictures' => $pictures,
        ]);
    }

    /**
     * Saves a new gallery image to the database and the file system.
     *
     * @param \App\Http\Requests\Gallery\SaveGalleryImageRequest $request The request containing the gallery image data.
     * @param int $id The ID of the gallery to save the image for.
     * @return \Illuminate\Http\RedirectResponse Redirects back to the previous page with a success or error message.
     */
    public function formSave(SaveGalleryImageRequest $request, int $id): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $galleryModel = Gallery::gart()->with('detailGalleries')->find($id);
            $galleryDTO = $request->dataTransferObject();

            $this->storingPictureToStorage(
                galleryModel: $galleryModel,
                galleryDTO: $galleryDTO,
                path: 'images/gart/gallery/detail'
            );

            DB::commit();

            return redirect()
                ->back()
                ->with('toastSuccess', 'Gallery images saves successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()
                ->back()
                ->with('toastError', $e->getMessage());
        }
    }

    /**
     * Deletes a gallery image from the database and the file system.
     *
     * @param int $image The ID of the gallery image to delete.
     * @param int $pictureId The ID of the detail gallery record to delete.
     * @return \Illuminate\Http\RedirectResponse Redirects back to the previous page with a success or error message.
     */
    public function destroy(int $image, int $pictureId): RedirectResponse
    {
        $detailGallery = DetailGallery::find($pictureId);

        if ($detailGallery) {
            $filePath = public_path('storage/images/gart/gallery/detail/' . $detailGallery->image);

            // Hapus file dari filesystem
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // Hapus entri dari database
            $detailGallery->delete();

            return redirect()
                ->back()
                ->with('toastSuccess', 'Gallery image deleted successfully');
        }

        return redirect()
            ->back()
            ->with('toastError', 'Gallery image not found');
    }
}
