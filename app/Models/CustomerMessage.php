<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CustomerMessage extends Model
{
    use HasFactory;

    /**
     * The database table associated with the CustomerMessage model.
     *
     * @var string
     */
    protected $table = 'customer_messages';

    /**
     * Indicates that the `id` field should be guarded and not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the location associated with the customer message.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location(): HasOne
    {
        return $this->hasOne(Location::class, 'model_id', 'id');
    }
}
