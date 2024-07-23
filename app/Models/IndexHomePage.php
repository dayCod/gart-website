<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexHomePage extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'index_home_pages';

    /**
     * @var array
     */
    protected $guarded = ['id'];
}
