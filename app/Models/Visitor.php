<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    use HasFactory;

    /**
     * The database table associated with the model.
     *
     * @var string
     */
    protected $table = 'visitors';

    /**
     * Indicates that the `id` field should be guarded and not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the location associated with the visitor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location(): HasOne
    {
        return $this->hasOne(Location::class, 'model_id', 'id');
    }
}
