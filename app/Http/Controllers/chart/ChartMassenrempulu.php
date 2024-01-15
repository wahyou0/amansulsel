<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\anggota_aman;
use Illuminate\Support\Facades\DB;

class ChartMassenrempulu extends Controller
{
    public function massenrempulu()
    {
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->where('pengurus_daerah','AMAN Massenrempulu')->pluck('laki');
        $wanita = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita"))->where('pengurus_daerah','AMAN Massenrempulu')->pluck('wanita');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Massenrempulu')->pluck('kom');
        $luas = anggota_aman::select(DB::raw("luas_indikatif as luas"))->where('pengurus_daerah','AMAN Massenrempulu')->pluck('luas');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Massenrempulu')->pluck('peta');
        $total = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('pengurus_daerah','AMAN Massenrempulu')->pluck('total');


        $lakiorong = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as lakiorong"))->where('komunitas','orong')->pluck('lakiorong');
        $wanitaorong = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanitaorong"))->where('komunitas','orong')->pluck('wanitaorong');
        $totalorong = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('komunitas','orong')->pluck('total');

        $laki_bambapuang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_bambapuang"))->where('komunitas','Bambapuang')->pluck('laki_bambapuang');
        $wanita_bambapuang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_bambapuang"))->where('komunitas','Bambapuang')->pluck('wanita_bambapuang');
        $total_bambapuang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_bambapuang"))->where('komunitas','Bambapuang')->pluck('total_bambapuang');
        
        $laki_patongloan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_patongloan"))->where('komunitas','Patongloan')->pluck('laki_patongloan');
        $wanita_patongloan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_patongloan"))->where('komunitas','Patongloan')->pluck('wanita_patongloan');
        $total_patongloan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_patongloan"))->where('komunitas','Patongloan')->pluck('total_patongloan');

        $laki_patongloan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_patongloan"))->where('komunitas','Patongloan')->pluck('laki_patongloan');
        $wanita_patongloan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_patongloan"))->where('komunitas','Patongloan')->pluck('wanita_patongloan');
        $total_patongloan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_patongloan"))->where('komunitas','Patongloan')->pluck('total_patongloan');

        $laki_tangsa = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tangsa"))->where('komunitas','Tangsa')->pluck('laki_tangsa');
        $wanita_tangsa = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_tangsa"))->where('komunitas','Tangsa')->pluck('wanita_tangsa');
        $total_tangsa = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tangsa"))->where('komunitas','Tangsa')->pluck('total_tangsa');
        
        $laki_baroko = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_baroko"))->where('komunitas','Baroko')->pluck('laki_baroko');
        $wanita_baroko = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_baroko"))->where('komunitas','Baroko')->pluck('wanita_baroko');
        $total_baroko = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_baroko"))->where('komunitas','Baroko')->pluck('total_baroko');
        
        $laki_pana = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_pana"))->where('komunitas','pana')->pluck('laki_pana');
        $wanita_pana = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_pana"))->where('komunitas','pana')->pluck('wanita_pana');
        $total_pana = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_pana"))->where('komunitas','pana')->pluck('total_pana');
        
        $laki_marena = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_marena"))->where('komunitas','marena')->pluck('laki_marena');
        $wanita_marena = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_marena"))->where('komunitas','marena')->pluck('wanita_marena');
        $total_marena = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_marena"))->where('komunitas','marena')->pluck('total_marena');
        
        $laki_mundan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_mundan"))->where('komunitas','mundan')->pluck('laki_mundan');
        $wanita_mundan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_mundan"))->where('komunitas','mundan')->pluck('wanita_mundan');
        $total_mundan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_mundan"))->where('komunitas','mundan')->pluck('total_mundan');
        
        $laki_uru = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_uru"))->where('komunitas','uru')->pluck('laki_uru');
        $wanita_uru = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_uru"))->where('komunitas','uru')->pluck('wanita_uru');
        $total_uru = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_uru"))->where('komunitas','uru')->pluck('total_uru');
        
        $laki_batu_noni = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_batu_noni"))->where('komunitas','Batu Noni')->pluck('laki_batu_noni');
        $wanita_batu_noni = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_batu_noni"))->where('komunitas','Batu Noni')->pluck('wanita_batu_noni');
        $total_batu_noni = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_batu_noni"))->where('komunitas','Batu Noni')->pluck('total_batu_noni');
        
        $laki_buntu_pema = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_buntu_pema"))->where('komunitas','buntu pema')->pluck('laki_buntu_pema');
        $wanita_buntu_pema = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_buntu_pema"))->where('komunitas','buntu pema')->pluck('wanita_buntu_pema');
        $total_buntu_pema = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_buntu_pema"))->where('komunitas','buntu pema')->pluck('total_buntu_pema');
        
        $laki_kalupini = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_kalupini"))->where('komunitas','kalupini')->pluck('laki_kalupini');
        $wanita_kalupini = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_kalupini"))->where('komunitas','kalupini')->pluck('wanita_kalupini');
        $total_kalupini = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_kalupini"))->where('komunitas','kalupini')->pluck('total_kalupini');
        
        $laki_ranga = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_ranga"))->where('komunitas','ranga')->pluck('laki_ranga');
        $wanita_ranga = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_ranga"))->where('komunitas','ranga')->pluck('wanita_ranga');
        $total_ranga = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_ranga"))->where('komunitas','ranga')->pluck('total_ranga');
        
        $laki_tallu_bamba = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tallu_bamba"))->where('komunitas','Tallubamba')->pluck('laki_tallu_bamba');
        $wanita_tallu_bamba = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_tallu_bamba"))->where('komunitas','Tallubamba')->pluck('wanita_tallu_bamba');
        $total_tallu_bamba = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tallu_bamba"))->where('komunitas','Tallubamba')->pluck('total_tallu_bamba');
        
        $laki_tondon = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tondon"))->where('komunitas','tondon')->pluck('laki_tondon');
        $wanita_tondon = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_tondon"))->where('komunitas','tondon')->pluck('wanita_tondon');
        $total_tondon = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tondon"))->where('komunitas','tondon')->pluck('total_tondon');
        
        $laki_limbuang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_limbuang"))->where('komunitas','limbuang')->pluck('laki_limbuang');
        $wanita_limbuang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_limbuang"))->where('komunitas','limbuang')->pluck('wanita_limbuang');
        $total_limbuang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_limbuang"))->where('komunitas','limbuang')->pluck('total_limbuang');
        
        $laki_pasang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_pasang"))->where('komunitas','pasang')->pluck('laki_pasang');
        $wanita_pasang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_pasang"))->where('komunitas','pasang')->pluck('wanita_pasang');
        $total_pasang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_pasang"))->where('komunitas','pasang')->pluck('total_pasang');
        
        $laki_baringin = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_baringin"))->where('komunitas','baringin')->pluck('laki_baringin');
        $wanita_baringin = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_baringin"))->where('komunitas','baringin')->pluck('wanita_baringin');
        $total_baringin = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_baringin"))->where('komunitas','baringin')->pluck('total_baringin');
        
        $laki_tapong = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tapong"))->where('komunitas','tapong')->pluck('laki_tapong');
        $wanita_tapong = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_tapong"))->where('komunitas','tapong')->pluck('wanita_tapong');
        $total_tapong = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tapong"))->where('komunitas','tapong')->pluck('total_tapong');
        
        $laki_matajang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_matajang"))->where('komunitas','matajang')->pluck('laki_matajang');
        $wanita_matajang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_matajang"))->where('komunitas','matajang')->pluck('wanita_matajang');
        $total_matajang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_matajang"))->where('komunitas','matajang')->pluck('total_matajang');
        
        $laki_andulang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_andulang"))->where('komunitas','andulang')->pluck('laki_andulang');
        $wanita_andulang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_andulang"))->where('komunitas','andulang')->pluck('wanita_andulang');
        $total_andulang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_andulang"))->where('komunitas','andulang')->pluck('total_andulang');
        
        $laki_malino = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_malino"))->where('komunitas','malino')->pluck('laki_malino');
        $wanita_malino = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_malino"))->where('komunitas','malino')->pluck('wanita_malino');
        $total_malino = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_malino"))->where('komunitas','malino')->pluck('total_malino');
        
        $laki_angge_batu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_angge_batu"))->where('komunitas','Anggebuntu')->pluck('laki_angge_batu');
        $wanita_angge_batu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanita_angge_batu"))->where('komunitas','Anggebuntu')->pluck('wanita_angge_batu');
        $total_angge_batu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_angge_batu"))->where('komunitas','Anggebuntu')->pluck('total_angge_batu');
        

        return view('admin.charts.massenrempulu', compact('laki',
                                                        'wanita',
                                                        'kom',
                                                        'luas',
                                                        'peta',
                                                        'lakiorong',
                                                        'wanitaorong',
                                                        'totalorong',
                                                        'laki_bambapuang',
                                                        'wanita_bambapuang',
                                                        'total_bambapuang',
                                                        'laki_patongloan',
                                                        'wanita_patongloan',
                                                        'total_patongloan',
                                                        'laki_tangsa',
                                                        'wanita_tangsa',
                                                        'total_tangsa',
                                                        'laki_baroko',
                                                        'wanita_baroko',
                                                        'total_baroko',
                                                        'laki_pana',
                                                        'wanita_pana',
                                                        'total_pana',
                                                        'laki_marena',
                                                        'wanita_marena',
                                                        'total_marena',
                                                        'laki_mundan',
                                                        'wanita_mundan',
                                                        'total_mundan',
                                                        'laki_uru',
                                                        'wanita_uru',
                                                        'total_uru',
                                                        'laki_batu_noni',
                                                        'wanita_batu_noni',
                                                        'total_batu_noni',
                                                        'laki_buntu_pema',
                                                        'wanita_buntu_pema',
                                                        'total_buntu_pema',
                                                        'laki_kalupini',
                                                        'wanita_kalupini',
                                                        'total_kalupini',
                                                        'laki_ranga',
                                                        'wanita_ranga',
                                                        'total_ranga',
                                                        'laki_tallu_bamba',
                                                        'wanita_tallu_bamba',
                                                        'total_tallu_bamba',
                                                        'laki_tondon',
                                                        'wanita_tondon',
                                                        'total_tondon',
                                                        'laki_limbuang',
                                                        'wanita_limbuang',
                                                        'total_limbuang',
                                                        'laki_pasang',
                                                        'wanita_pasang',
                                                        'total_pasang',
                                                        'laki_baringin',
                                                        'wanita_baringin',
                                                        'total_baringin',
                                                        'laki_tapong',
                                                        'wanita_tapong',
                                                        'total_tapong',
                                                        'laki_matajang',
                                                        'wanita_matajang',
                                                        'total_matajang',
                                                        'laki_andulang',
                                                        'wanita_andulang',
                                                        'total_andulang',
                                                        'laki_malino',
                                                        'wanita_malino',
                                                        'total_malino',
                                                        'laki_angge_batu',
                                                        'wanita_angge_batu',
                                                        'total_angge_batu',
                                                        'total'));
    }
}
