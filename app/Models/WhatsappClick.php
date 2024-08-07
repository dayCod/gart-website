<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WhatsappClick extends Model
{
    use HasFactory;

    /**
     * The database table associated with the WhatsappClick model.
     *
     * @var string
     */
    protected $table = 'whatsapp_clicks';

    /**
     * Indicates that the `id` field should be guarded and not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the location associated with the WhatsappClick model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location(): HasOne
    {
        return $this->hasOne(Location::class, 'model_id', 'id');
    }
}
