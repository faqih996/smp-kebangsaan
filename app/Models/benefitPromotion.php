<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class benefitPromotion extends Model
{
    protected $fillable = [
        'promotion_id',
        'name',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }
}