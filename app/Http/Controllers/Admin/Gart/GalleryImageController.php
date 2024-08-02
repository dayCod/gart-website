<?php

namespace App\Http\Controllers\Admin\Gart;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DetailGallery;
use App\Services\ImageService;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Storage;
use Rembon\SyncCollection\SyncCollection;
use App\Http\Requests\Gallery\SaveGalleryImageRequest;

class GalleryImageController extends Controller
{
    /**
     * Renders the view for the gallery image form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function form(int $id): View
    {
        $pictures = DetailGallery::where('gallery_id', $id)->orderBy('id', 'asc')->get();

        return view('admin.pages.gart.gallery.images.form', [
            'gallery_id' => $id,
            'pictures' => $pictures,
        ]);
    }

    public function formSave(SaveGalleryImageRequest $request, int $id): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $galleryModel = Gallery::with('detailGalleries')->find($id);
            $galleryDTO = $request->dataTransferObject();

            if (!empty($request->galleries)) {
                $imageService = new ImageService(
                    imageRequest: $galleryDTO['galleries'],
                    storeToFolder: 'images/gart/gallery/detail',
                    imageName: date('dmyHis'),
                );

                $imagePaths = $imageService->executeMultipleImages();
                $updatedKeys = array_keys($request->file('galleries'));
                $existingPictures = $galleryModel->detailGalleries()->orderBy('id', 'asc')->get();

                foreach ($updatedKeys as $index => $key) {
                    $detailGallery = $existingPictures[$key] ?? null;

                    if (!is_null($detailGallery) && isset($existingPictures[$key])) {
                        Storage::disk('public')->delete('storage/images/gart/gallery/detail/' . $detailGallery->image);
                        $detailGallery->update(['image' => $imagePaths[$index]]);
                    } else {
                        $galleryModel->detailGalleries()->create([
                            'image' => $imagePaths[$index],
                        ]);
                    }
                }
            }

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
