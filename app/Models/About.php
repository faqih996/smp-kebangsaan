<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    use HasFactory;

    protected $fillable = [
        'npsn',
        'akreditasi',
        'no_sk_akreditasi',
        'status_sk_akreditasi',
        'jenjang_pendidikan',
        'sk_pendirian',
        'tgl_sk_pendirian',
        'sk_operasional',
        'tgl_sk_operasional',
        'description',
        'address',
        'maps',
        'jumlah_siswa',
        'jumlah_kelas',
        'phone',
        'email',
        'thumbnail',

    ];
}