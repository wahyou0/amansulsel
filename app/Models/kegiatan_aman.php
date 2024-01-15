<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan_aman extends Model
{
    protected $table = 'kegiatan_aman';
    protected $fillable = [
        'id',
        'tempat',
        'tahun',
        'pelaksana',
        'nama_kegiatan',
        'cek_tahun_kegiatan'
    ];
}
