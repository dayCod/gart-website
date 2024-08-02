<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gallery extends Model
{
    use HasFactory;

    /**
     * The name of the folder where gallery images are stored.
     *
     * @var string
     */
    const FOLDER_NAME = 'images/gart/gallery';

    /**
     * The database table name for the Gallery model.
     *
     * @var string
     */
    protected $table = 'galleries';

    /**
     * Indicates that all attributes are guarded from mass assignment except for the 'id' attribute.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Casts the 'tags' attribute to an array.
     *
     * @var array
     */
    protected $casts = [
        'tags' => 'array',
    ];

    /**
     * Appends the 'slug' attribute to the model's attributes.
     * The 'slug' attribute is generated from the 'name' attribute using the Illuminate\Support\Str::slug() function.
     * This allows the model to expose a URL-friendly slug version of the name.
     *
     * @var array
     */
    protected $appends = ['slug'];

    /**
     * Get the category that the gallery item belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Get the detail galleries associated with this gallery.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailGalleries(): HasMany
    {
        return $this->hasMany(DetailGallery::class, 'gallery_id', 'id');
    }

    /**
     * Scope a query to only include categories of the 'gart' type.
     *
     * @param  \Illuminate\Contracts\Database\Query\Builder  $query
     * @return \Illuminate\Contracts\Database\Query\Builder
     */
    public function scopeGart($query): Builder
    {
        return $query->where('type', 'gart');
    }

    /**
     * Scope a query to only include categories of the 'reise' type.
     *
     * @param  \Illuminate\Contracts\Database\Query\Builder  $query
     * @return \Illuminate\Contracts\Database\Query\Builder
     */
    public function scopeReise($query): Builder
    {
        return $query->where('type', 'reise');
    }

    /**
     * Get the URL for the category's profile image.
     *
     * @return string The URL for the category's profile image.
     */
    public function getImageURL()
    {
        return asset('storage/' . self::FOLDER_NAME . '/' . $this->image);
    }

    /**
     * Get the tags attribute as an array.
     *
     * This method decodes the 'tags' attribute from JSON and returns an array of the 'value' property from each item.
     *
     * @param string $value The JSON-encoded tags value.
     * @return array An array of tag values.
     */
    public function getTagsAttribute($value)
    {
        $array = json_decode($value, true);

        return array_map(function ($item) {
            return $item['value'];
        }, $array);
    }

    /**
     * Mutator method that formats an array of tag values into a JSON-encoded string for storage in the 'tags' attribute.
     *
     * @param array $value An array of tag values.
     * @return void
     */
    public function setTagsAttribute($value)
    {
        return $this->attributes['tags'] = $value;
    }

    /**
     * Accessor method that returns a URL-friendly slug version of the gallery title.
     *
     * @return string The slug version of the gallery title.
     */
    public function getSlugAttribute(): string
    {
        return \Illuminate\Support\Str::slug($this->title);
    }
}
