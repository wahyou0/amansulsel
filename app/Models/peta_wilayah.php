<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peta_wilayah extends Model
{
    protected $table = 'peta_wilayah';
    protected $fillable = [
        'id',
        'nama_pd',
        'nama_komunitas',
        'polygon',
    ];
}
