<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vision extends Model
{

    protected $fillable = [
        'name',
    ];

    public function mission(): HasMany
    {
        return $this->hasMany(Mision::class);
    }
}