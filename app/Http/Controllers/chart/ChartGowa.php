<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\anggota_aman;
use Illuminate\Support\Facades\DB;

class ChartGowa extends Controller
{
    public function gowa()
    {
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->where('pengurus_daerah','AMAN Gowa')->pluck('laki');
        $perempuan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan"))->where('pengurus_daerah','AMAN Gowa')->pluck('perempuan');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Gowa')->pluck('kom');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Gowa')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Gowa')->pluck('peta');
        $total = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('pengurus_daerah','AMAN Gowa')->pluck('total');

        $laki_balasuka = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_balasuka"))->where('komunitas','Balasuka')->pluck('laki_balasuka');
        $perempuan_balasuka = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_balasuka"))->where('komunitas','Balasuka')->pluck('perempuan_balasuka');
        $total_balasuka = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_balasuka"))->where('komunitas','Balasuka')->pluck('total_balasuka');
        
        $laki_baliti = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_baliti"))->where('komunitas','Baliti')->pluck('laki_baliti');
        $perempuan_baliti = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_baliti"))->where('komunitas','Baliti')->pluck('perempuan_baliti');
        $total_baliti = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_baliti"))->where('komunitas','Baliti')->pluck('total_baliti');

        $laki_bolaromang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_bolaromang"))->where('komunitas','Bolaromang')->pluck('laki_bolaromang');
        $perempuan_bolaromang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_bolaromang"))->where('komunitas','Bolaromang')->pluck('perempuan_bolaromang');
        $total_bolaromang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_bolaromang"))->where('komunitas','Bolaromang')->pluck('total_bolaromang');
        
        $laki_bulutana = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_bulutana"))->where('komunitas','Bulutana')->pluck('laki_bulutana');
        $perempuan_bulutana = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_bulutana"))->where('komunitas','Bulutana')->pluck('perempuan_bulutana');
        $total_bulutana = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_bulutana"))->where('komunitas','Bulutana')->pluck('total_bulutana');
         
        $laki_garassi = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_garassi"))->where('komunitas','Garassi')->pluck('laki_garassi');
        $perempuan_garassi = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_garassi"))->where('komunitas','Garassi')->pluck('perempuan_garassi');
        $total_garassi = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_garassi"))->where('komunitas','Garassi')->pluck('total_garassi');
         
        $laki_matteko = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_matteko"))->where('komunitas','Matteko')->pluck('laki_matteko');
        $perempuan_matteko = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_matteko"))->where('komunitas','Matteko')->pluck('perempuan_matteko');
        $total_matteko = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_matteko"))->where('komunitas','Matteko')->pluck('total_matteko');
         
        $laki_pattalassang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_pattalassang"))->where('komunitas','Pattalassang')->pluck('laki_pattalassang');
        $perempuan_pattalassang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_pattalassang"))->where('komunitas','Pattalassang')->pluck('perempuan_pattalassang');
        $total_pattalassang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_pattalassang"))->where('komunitas','Pattalassang')->pluck('total_pattalassang');
         
        $laki_suka = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_suka"))->where('komunitas','Suka')->pluck('laki_suka');
        $perempuan_suka = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_suka"))->where('komunitas','Suka')->pluck('perempuan_suka');
        $total_suka = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_suka"))->where('komunitas','Suka')->pluck('total_suka');
         
        $laki_teko = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_teko"))->where('komunitas','Teko')->pluck('laki_teko');
        $perempuan_teko = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_teko"))->where('komunitas','Teko')->pluck('perempuan_teko');
        $total_teko = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_teko"))->where('komunitas','Teko')->pluck('total_teko');

        return view('admin.charts.gowa', compact('laki',
                                                'kom',
                                                'indikatif',
                                                'peta',
                                                'total',
                                                'laki_balasuka',
                                                'perempuan_balasuka',
                                                'total_balasuka',
                                                'laki_baliti',
                                                'perempuan_baliti',
                                                'total_baliti',
                                                'laki_bolaromang',
                                                'perempuan_bolaromang',
                                                'total_bolaromang',
                                                'laki_bulutana',
                                                'perempuan_bulutana',
                                                'total_bulutana',
                                                'laki_garassi',
                                                'perempuan_garassi',
                                                'total_garassi',
                                                'laki_matteko',
                                                'perempuan_matteko',
                                                'total_matteko',
                                                'laki_pattalassang',
                                                'perempuan_pattalassang',
                                                'total_pattalassang',
                                                'laki_suka',
                                                'perempuan_suka',
                                                'total_suka',
                                                'laki_teko',
                                                'perempuan_teko',
                                                'total_teko',
                                                'perempuan'));

    }
}
