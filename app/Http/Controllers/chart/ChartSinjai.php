<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use App\Models\anggota_aman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartSinjai extends Controller
{
    public function sinjai()
    {
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->where('pengurus_daerah','AMAN Sinjai')->pluck('laki');
        $perempuan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan"))->where('pengurus_daerah','AMAN Sinjai')->pluck('perempuan');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Sinjai')->pluck('kom');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Sinjai')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Sinjai')->pluck('peta');
        $total = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('pengurus_daerah','AMAN Sinjai')->pluck('total');

        $laki_barambang_katute = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_barambang_katute"))->where('komunitas','Barambang Katute')->pluck('laki_barambang_katute');
        $perempuan_barambang_katute = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_barambang_katute"))->where('komunitas','Barambang Katute')->pluck('perempuan_barambang_katute');
        $total_barambang_katute = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_barambang_katute"))->where('komunitas','Barambang Katute')->pluck('total_barambang_katute');
        
        $laki_kampala = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_kampala"))->where('komunitas','Kampala')->pluck('laki_kampala');
        $perempuan_kampala = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_kampala"))->where('komunitas','Kampala')->pluck('perempuan_kampala');
        $total_kampala = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_kampala"))->where('komunitas','Kampala')->pluck('total_kampala');
        
        $laki_karampuang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_karampuang"))->where('komunitas','Karampuang')->pluck('laki_karampuang');
        $perempuan_karampuang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_karampuang"))->where('komunitas','Karampuang')->pluck('perempuan_karampuang');
        $total_karampuang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_karampuang"))->where('komunitas','Karampuang')->pluck('total_karampuang');
        
        $laki_pattiro_toa = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_pattiro_toa"))->where('komunitas','Pattiro Toa')->pluck('laki_pattiro_toa');
        $perempuan_pattiro_toa = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_pattiro_toa"))->where('komunitas','Pattiro Toa')->pluck('perempuan_pattiro_toa');
        $total_pattiro_toa = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_pattiro_toa"))->where('komunitas','Pattiro Toa')->pluck('total_pattiro_toa');
        
        $laki_soppeng_turungan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_soppeng_turungan"))->where('komunitas','Soppeng Turungan')->pluck('laki_soppeng_turungan');
        $perempuan_soppeng_turungan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_soppeng_turungan"))->where('komunitas','Soppeng Turungan')->pluck('perempuan_soppeng_turungan');
        $total_soppeng_turungan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_soppeng_turungan"))->where('komunitas','Soppeng Turungan')->pluck('total_soppeng_turungan');
        
        return view('admin.charts.sinjai', compact('laki',
                                                'kom',
                                                'indikatif',
                                                'peta',
                                                'total',
                                                'laki_barambang_katute',
                                                'perempuan_barambang_katute',
                                                'total_barambang_katute',
                                                'laki_kampala',
                                                'perempuan_kampala',
                                                'total_kampala',
                                                'laki_karampuang',
                                                'perempuan_karampuang',
                                                'total_karampuang',
                                                'laki_pattiro_toa',
                                                'perempuan_pattiro_toa',
                                                'total_pattiro_toa',
                                                'laki_soppeng_turungan',
                                                'perempuan_soppeng_turungan',
                                                'total_soppeng_turungan',
                                                'perempuan'));
    }
}
