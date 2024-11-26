<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mision extends Model
{
     use HasFactory;

    protected $fillable = [
        'vision_id',
        'name',
    ];

    public function vision(): BelongsTo
    {
        return $this->belongsTo(Vision::class, 'vision_id');
    }
}