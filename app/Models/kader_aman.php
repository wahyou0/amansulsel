<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kader_aman extends Model
{
    protected $table = 'kader_aman';
    protected $fillable = [
        'id',
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'nama_komunitas',
        'alamat',
        'no_hp',
        'email',
        'kegiatan_diikuti',
        'status_kader',
        'keterangan',
    ];
}
