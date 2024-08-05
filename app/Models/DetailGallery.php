<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailGallery extends Model
{
    use HasFactory;

    /**
     * The name of the folder where gallery images are stored.
     *
     * @var string
     */
    const GART_FOLDER_NAME = 'images/gart/gallery/detail';

    /**
     * The name of the folder where gallery images are stored.
     *
     * @var string
     */
    const REISE_FOLDER_NAME = 'images/reise/gallery/detail';

    /**
     * The database table name for the DetailGallery model.
     *
     * @var string
     */
    protected $table = 'detail_galleries';

    /**
     * Indicates that all fields of the `DetailGallery` model are guarded from mass assignment, except for the `id` field.
     * This is a common pattern in Laravel models to prevent unintended mass assignment of model attributes.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the Gallery model that this DetailGallery model belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery(): BelongsTo
    {
        return $this->belongsTo(Gallery::class, 'gallery_id', 'id');
    }

    /**
     * Get the URL for the category's profile image.
     *
     * @return string The URL for the category's profile image.
     */
    public function getImageURL(string $type = 'gart')
    {
        return $type === 'gart'
            ? asset('storage/' . self::GART_FOLDER_NAME . '/' . $this->image)
            : asset('storage/' . self::REISE_FOLDER_NAME . '/' . $this->image);
    }
}
