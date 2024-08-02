<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;

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
     * This method takes an optional `$images` parameter, which can be used to provide a specific image file to be stored.
     * If `$images` is not provided, the method will use the `$imageRequest` property of the class.
     *
     * If the `$generateRandStr` parameter is set to `true`, the method will generate a random 5-character string and append it to the filename.
     *
     * The method will store the image file in the `$storeToFolder` directory, using the `$imageName` property as the base filename, and the file extension of the uploaded image.
     *
     * @param \Illuminate\Http\UploadedFile|null $images The uploaded image file to be stored.
     * @param bool $generateRandStr Whether to generate a random string and append it to the filename.
     * @return string The public URL of the stored image file.
     */
    public function executeSingleImage($images = null, $generateRandStr = false): string
    {
        $image = is_null($images) ? $this->imageRequest : $images;

        $extension = $image->extension();

        $randStr = Str::random(5);

        $filename = $generateRandStr
            ? "{$this->imageName}-{$randStr}.{$extension}"
            : $this->imageName.'.'.$extension;

        Storage::putFileAs("public/{$this->storeToFolder}", $image, $filename);

        return $filename;
    }

    /**
     * Stores multiple uploaded image files and returns an array of the public URLs of the stored files.
     *
     * If the provided `$imageRequest` is an array, this method will loop through each image in the array,
     * store it using the `executeSingleImage()` method, and return an array of the public URLs of the stored files.
     *
     * If the provided `$imageRequest` is not an array, this method will return an `UploadException` with
     * the message "The provided image request is not an array."
     *
     * @return array|UploadException An array or an `UploadException` if the `$imageRequest` is not an array.
     */
    public function executeMultipleImages(): array|UploadException
    {
        if (is_array($this->imageRequest)) {

            $imagePath = array();

            foreach ($this->imageRequest as $image) {
                $imagePath[] = $this->executeSingleImage(images: $image, generateRandStr: true);
            }

            return $imagePath;
        }

        return new UploadException('The provided image request is not an array.');
    }
}
