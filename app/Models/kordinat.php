<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kordinat extends Model
{
    protected $table = 'kordinat';
    protected $fillable = [
        'id',
        'nama_pd',
        'nama_komunitas',
        'kordinat',
        'image_peta',
        'deskripsi'
    ];
}
