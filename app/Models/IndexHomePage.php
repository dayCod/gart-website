<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class IndexHomePage extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * @var string
     */
    protected $table = 'index_home_pages';

    /**
     * @var array
     */
    protected $guarded = ['id'];
}
