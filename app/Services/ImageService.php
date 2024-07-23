<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    /**
     * The uploaded image file or an array of uploaded image files.
     *
     * @var \Illuminate\Http\UploadedFile|array
     */
    protected $imageRequest;

    /**
     * The folder where the uploaded image will be stored.
     *
     * @var string
     */
    protected $storeToFolder;

    /**
     * The name of the uploaded image file.
     *
     * @var string
     */
    protected $imageName;

    /**
     * Constructs an ImageService instance with the provided image request, storage folder, and image name.
     *
     * @param \Illuminate\Http\UploadedFile|array $imageRequest The uploaded image file or an array of uploaded image files.
     * @param string $storeToFolder The folder where the uploaded image will be stored.
     * @param string $imageName The name of the uploaded image file.
     */
    public function __construct(
        UploadedFile|array $imageRequest,
        string $storeToFolder,
        string $imageName,
    ) {
        $this->imageRequest = $imageRequest;
        $this->storeToFolder = $storeToFolder;
        $this->imageName = $imageName;
    }

    /**
     * Stores a single uploaded image file and returns the public URL of the stored file.
     *
     * @return string The public URL of the stored image file.
     */
    public function executeSingleImage(): string
    {
        $extension = $this->imageRequest->extension();
        $path = Storage::putFileAs("public/{$this->storeToFolder}", $this->imageRequest, $this->imageName.'.'.$extension);

        return $this->imageName.'.'.$extension;
    }
}
