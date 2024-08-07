<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Gallery;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Represents the 'gart' type for the application.
     *
     * @var string
     */
    const TYPE_AS_GART = 'gart';

    /**
     * Represents the 'reise' type for the application.
     *
     * @var string
     */
    const TYPE_AS_REISE = 'reise';

    /**
     * Represents the WhatsApp phone number for the 'gart' type of the application.
     *
     * @var string
     */
    const GART_WHATSAPP_PHONE_NUMBER = '6288808967543';

    /**
     * Stores multiple images to the specified storage path and updates the corresponding gallery model.
     *
     * @param Gallery $galleryModel The gallery model instance.
     * @param array $galleryDTO An array containing the gallery data, including the images to be stored.
     * @param string $path The storage path where the images will be saved.
     */
    public function storingPictureToStorage(Gallery $galleryModel, array $galleryDTO, string $path): void
    {
        if (!empty($galleryDTO['galleries'])) {
            $imageService = new ImageService(
                imageRequest: $galleryDTO['galleries'],
                storeToFolder: $path,
                imageName: date('dmyHis'),
            );

            $imagePaths = $imageService->executeMultipleImages();
            $updatedKeys = array_keys($galleryDTO['galleries']);
            $existingPictures = $galleryModel->detailGalleries()->orderBy('id', 'asc')->get();

            foreach ($updatedKeys as $index => $key) {
                $detailGallery = $existingPictures[$key] ?? null;

                if (!is_null($detailGallery) && isset($existingPictures[$key])) {
                    Storage::disk('public')->delete($path. '/' . $detailGallery->image);
                    $detailGallery->update(['image' => $imagePaths[$index]]);
                } else {
                    $galleryModel->detailGalleries()->create([
                        'image' => $imagePaths[$index],
                    ]);
                }
            }
        }
    }
}
