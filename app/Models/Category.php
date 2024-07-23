<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The name of the folder where category images are stored.
     *
     * @var string
     */
    const FOLDER_NAME = 'images/gart/category';

    /**
     * The database table name for the Category model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Specifies that the `id` column should be guarded and not mass assignable.
     * This helps prevent mass assignment vulnerabilities by only allowing
     * specific columns to be set via mass assignment.
     *
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * Appends the 'slug' attribute to the model's attributes.
     * The 'slug' attribute is generated from the 'name' attribute using the Illuminate\Support\Str::slug() function.
     * This allows the model to expose a URL-friendly slug version of the name.
     *
     * @var array
     */
    protected $appends = ['slug'];


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
     * Accessor method that returns a URL-friendly slug version of the category name.
     *
     * @return string The slug version of the category name.
     */
    public function getSlugAttribute(): string
    {
        return \Illuminate\Support\Str::slug($this->name);
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
}
