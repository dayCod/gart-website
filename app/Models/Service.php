<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    /**
     * The database table name for the Gallery model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
     * Indicates that all attributes are guarded from mass assignment except for the 'id' attribute.
     *
     * @var array
     */
    protected $guarded = ['id'];

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
}
