<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'npsn',
        'akreditasi',
        'no_sk_akreditasi',
        'status_sk_akreditasi',
        'jenjang_pendidikan',
        'sk_pendirian',
        'tgl_sk_pendirian',
        'sk_operatsional',
        'tgl_sk_operational',
        'description',
        'address',
        'maps',
        'jumlah_siswa',
        'phone',
        'email',
        'thumbnail',
    ];
}