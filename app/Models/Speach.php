<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Speach extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'description',
        'thumbnail',
        'speaker_name',
        'jabatan'
    ];

    public function news(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}