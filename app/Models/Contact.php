<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'email',
        'phone',
        'category',
        'subject',
        'description',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['subject'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}