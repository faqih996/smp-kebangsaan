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
        'subject',
        'name',
        'slug',
        'email',
        'phone',
        'category',
        'description',
    ];

    public function setSubjectAttribute($value)
    {
        // Set subject ke atribut subject
        $this->attributes['subject'] = $value;

        // Set slug berdasarkan subject
        $this->attributes['slug'] = Str::slug($value);
    }

    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = $value;
    //     $this->attributes['slug'] = Str::slug($value);
    // }
}