<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\kader_aman;
use App\Models\kegiatan_aman;
use App\Models\kordinat;
use App\Models\peta_wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function peta_wilayah()
    {
        $nama_mark = kordinat::all();
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');

        return view('admin.layout_user.peta_wilayah', compact('nama_mark','draw'));
    }

    
    public function kader()
    {
        $kader = kader_aman::all();

        return view('admin.layout_user.kader_aman.index', compact('kader'));
    }


    public function kegiatan()
    {
        $kegiatan = kegiatan_aman::all();
        
        return view('admin.layout_user.kegiatan_aman', compact('kegiatan'));
    }
}
