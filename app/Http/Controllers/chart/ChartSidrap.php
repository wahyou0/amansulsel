<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use App\Models\anggota_aman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartSidrap extends Controller
{
    public function sidrap()
    {
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->where('pengurus_daerah','AMAN Sidrap')->pluck('laki');
        $perempuan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan"))->where('pengurus_daerah','AMAN Sidrap')->pluck('perempuan');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Sidrap')->pluck('kom');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Sidrap')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Sidrap')->pluck('peta');
        $total = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('pengurus_daerah','AMAN Sidrap')->pluck('total');

        $laki_cenreangin = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_cenreangin"))->where('komunitas','Cenreangin')->pluck('laki_cenreangin');
        $perempuan_cenreangin = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_cenreangin"))->where('komunitas','Cenreangin')->pluck('perempuan_cenreangin');
        $total_cenreangin = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_cenreangin"))->where('komunitas','Cenreangin')->pluck('total_cenreangin');
        
        $laki_sando_batu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_sando_batu"))->where('komunitas','Sando Batu')->pluck('laki_sando_batu');
        $perempuan_sando_batu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_sando_batu"))->where('komunitas','Sando Batu')->pluck('perempuan_sando_batu');
        $total_sando_batu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_sando_batu"))->where('komunitas','Sando Batu')->pluck('total_sando_batu');
        
        $laki_tolotang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tolotang"))->where('komunitas','Tolotang')->pluck('laki_tolotang');
        $perempuan_tolotang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tolotang"))->where('komunitas','Tolotang')->pluck('perempuan_tolotang');
        $total_tolotang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tolotang"))->where('komunitas','Tolotang')->pluck('total_tolotang');
        
        return view('admin.charts.sidrap', compact('laki',
                                                'kom',
                                                'indikatif',
                                                'peta',
                                                'total',
                                                'laki_cenreangin',
                                                'perempuan_cenreangin',
                                                'total_cenreangin',
                                                'laki_sando_batu',
                                                'perempuan_sando_batu',
                                                'total_sando_batu',
                                                'laki_tolotang',
                                                'perempuan_tolotang',
                                                'total_tolotang',
                                                'perempuan'));
    }
}
