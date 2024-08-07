<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * The database table associated with the `Location` model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * Indicates that the `id` field should be guarded and not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
