<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use App\Models\anggota_aman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartMaros extends Controller
{
    public function maros()
    {
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->where('pengurus_daerah','AMAN Maros')->pluck('laki');
        $perempuan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan"))->where('pengurus_daerah','AMAN Maros')->pluck('perempuan');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Maros')->pluck('kom');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Maros')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Maros')->pluck('peta');
        $total = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('pengurus_daerah','AMAN Maros')->pluck('total');

        $laki_batu_bassi = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_batu_bassi"))->where('komunitas','Batu Bassi')->pluck('laki_batu_bassi');
        $perempuan_batu_bassi = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_batu_bassi"))->where('komunitas','Batu Bassi')->pluck('perempuan_batu_bassi');
        $total_batu_bassi = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_batu_bassi"))->where('komunitas','Batu Bassi')->pluck('total_batu_bassi');
        
        $laki_bululewang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_bululewang"))->where('komunitas','Bululewang')->pluck('laki_bululewang');
        $perempuan_bululewang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_bululewang"))->where('komunitas','Bululewang')->pluck('perempuan_bululewang');
        $total_bululewang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_bululewang"))->where('komunitas','Bululewang')->pluck('total_bululewang');
        
        $laki_karaeng_baru = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_karaeng_baru"))->where('komunitas','Karaeng Baru')->pluck('laki_karaeng_baru');
        $perempuan_karaeng_baru = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_karaeng_baru"))->where('komunitas','Karaeng Baru')->pluck('perempuan_karaeng_baru');
        $total_karaeng_baru = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_karaeng_baru"))->where('komunitas','Karaeng Baru')->pluck('total_karaeng_baru');
        
        $laki_karaeng_bassikalling = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_karaeng_bassikalling"))->where('komunitas','Karaeng Bassikalling')->pluck('laki_karaeng_bassikalling');
        $perempuan_karaeng_bassikalling = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_karaeng_bassikalling"))->where('komunitas','Karaeng Bassikalling')->pluck('perempuan_karaeng_bassikalling');
        $total_karaeng_bassikalling = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_karaeng_bassikalling"))->where('komunitas','Karaeng Bassikalling')->pluck('total_karaeng_bassikalling');
        
        $laki_karaeng_bossolo = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_karaeng_bossolo"))->where('komunitas','Karaeng Bossolo')->pluck('laki_karaeng_bossolo');
        $perempuan_karaeng_bossolo = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_karaeng_bossolo"))->where('komunitas','Karaeng Bossolo')->pluck('perempuan_karaeng_bossolo');
        $total_karaeng_bossolo = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_karaeng_bossolo"))->where('komunitas','Karaeng Bossolo')->pluck('total_karaeng_bossolo');
        
        $laki_karaeng_bulu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_karaeng_bulu"))->where('komunitas','Karaeng Bulu')->pluck('laki_karaeng_bulu');
        $perempuan_karaeng_bulu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_karaeng_bulu"))->where('komunitas','Karaeng Bulu')->pluck('perempuan_karaeng_bulu');
        $total_karaeng_bulu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_karaeng_bulu"))->where('komunitas','Karaeng Bulu')->pluck('total_karaeng_bulu');
        
        $laki_tanralili = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tanralili"))->where('komunitas','Tanralili')->pluck('laki_tanralili');
        $perempuan_tanralili = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tanralili"))->where('komunitas','Tanralili')->pluck('perempuan_tanralili');
        $total_tanralili = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tanralili"))->where('komunitas','Tanralili')->pluck('total_tanralili');
        
        return view('admin.charts.maros', compact('laki',
                                                'kom',
                                                'indikatif',
                                                'peta',
                                                'total',
                                                'laki_batu_bassi',
                                                'perempuan_batu_bassi',
                                                'total_batu_bassi',
                                                'laki_bululewang',
                                                'perempuan_bululewang',
                                                'total_bululewang',
                                                'laki_karaeng_baru',
                                                'perempuan_karaeng_baru',
                                                'total_karaeng_baru',
                                                'laki_karaeng_bassikalling',
                                                'perempuan_karaeng_bassikalling',
                                                'total_karaeng_bassikalling',
                                                'laki_karaeng_bossolo',
                                                'perempuan_karaeng_bossolo',
                                                'total_karaeng_bossolo',
                                                'laki_karaeng_bulu',
                                                'perempuan_karaeng_bulu',
                                                'total_karaeng_bulu',
                                                'laki_tanralili',
                                                'perempuan_tanralili',
                                                'total_tanralili',
                                                'perempuan'));
    }
}
