<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use App\Models\anggota_aman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartToraya extends Controller
{
    public function toraya()
    {
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->where('pengurus_daerah','AMAN Toraya')->pluck('laki');
        $perempuan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan"))->where('pengurus_daerah','AMAN Toraya')->pluck('perempuan');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Toraya')->pluck('kom');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Toraya')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Toraya')->pluck('peta');
        $total = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('pengurus_daerah','AMAN Toraya')->pluck('total');

        $balepe = "Balepe'";
        $laki_balepe = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_balepe"))->where('komunitas',$balepe)->pluck('laki_balepe');
        $perempuan_balepe = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_balepe"))->where('komunitas',$balepe)->pluck('perempuan_balepe');
        $total_balepe = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_balepe"))->where('komunitas',$balepe)->pluck('total_balepe');
        
        $laki_balla = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_balla"))->where('komunitas','Balla')->pluck('laki_balla');
        $perempuan_balla = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_balla"))->where('komunitas','Balla')->pluck('perempuan_balla');
        $total_balla = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_balla"))->where('komunitas','Balla')->pluck('total_balla');
        
        $laki_banga = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_banga"))->where('komunitas','Banga')->pluck('laki_banga');
        $perempuan_banga = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_banga"))->where('komunitas','Banga')->pluck('perempuan_banga');
        $total_banga = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_banga"))->where('komunitas','Banga')->pluck('total_banga');
        
        $laki_bau = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_bau"))->where('komunitas','Bau')->pluck('laki_bau');
        $perempuan_bau = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_bau"))->where('komunitas','Bau')->pluck('perempuan_bau');
        $total_bau = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_bau"))->where('komunitas','Bau')->pluck('total_bau');
        
        $laki_bittuang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_bittuang"))->where('komunitas','Bittuang')->pluck('laki_bittuang');
        $perempuan_bittuang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_bittuang"))->where('komunitas','Bittuang')->pluck('perempuan_bittuang');
        $total_bittuang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_bittuang"))->where('komunitas','Bittuang')->pluck('total_bittuang');
        
        $laki_buakayu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_buakayu"))->where('komunitas','Buakayu')->pluck('laki_buakayu');
        $perempuan_buakayu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_buakayu"))->where('komunitas','Buakayu')->pluck('perempuan_buakayu');
        $total_buakayu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_buakayu"))->where('komunitas','Buakayu')->pluck('total_buakayu');
        
        $laki_kurra = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_kurra"))->where('komunitas','Kurra')->pluck('laki_kurra');
        $perempuan_kurra = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_kurra"))->where('komunitas','Kurra')->pluck('perempuan_kurra');
        $total_kurra = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_kurra"))->where('komunitas','Kurra')->pluck('total_kurra');
        
        $laki_madandan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_madandan"))->where('komunitas','Madandan')->pluck('laki_madandan');
        $perempuan_madandan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_madandan"))->where('komunitas','Madandan')->pluck('perempuan_madandan');
        $total_madandan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_madandan"))->where('komunitas','Madandan')->pluck('total_madandan');
        
        $laki_makale = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_makale"))->where('komunitas','Makale')->pluck('laki_makale');
        $perempuan_makale = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_makale"))->where('komunitas','Makale')->pluck('perempuan_makale');
        $total_makale = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_makale"))->where('komunitas','Makale')->pluck('total_makale');
        
        $laki_malimbong = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_malimbong"))->where('komunitas','Malimbong')->pluck('laki_malimbong');
        $perempuan_malimbong = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_malimbong"))->where('komunitas','Malimbong')->pluck('perempuan_malimbong');
        $total_malimbong = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_malimbong"))->where('komunitas','Malimbong')->pluck('total_malimbong');
        
        $mappa = "Mappa'";
        $laki_mappa = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_mappa"))->where('komunitas',$mappa)->pluck('laki_mappa');
        $perempuan_mappa = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_mappa"))->where('komunitas',$mappa)->pluck('perempuan_mappa');
        $total_mappa = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_mappa"))->where('komunitas',$mappa)->pluck('total_mappa');
        
        $laki_mengkendek = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_mengkendek"))->where('komunitas','Mengkendek')->pluck('laki_mengkendek');
        $perempuan_mengkendek = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_mengkendek"))->where('komunitas','Mengkendek')->pluck('perempuan_mengkendek');
        $total_mengkendek = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_mengkendek"))->where('komunitas','Mengkendek')->pluck('total_mengkendek');
        
        $laki_palesan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_palesan"))->where('komunitas','Palesan')->pluck('laki_palesan');
        $perempuan_palesan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_palesan"))->where('komunitas','Palesan')->pluck('perempuan_palesan');
        $total_palesan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_palesan"))->where('komunitas','Palesan')->pluck('total_palesan');
        
        $laki_pali = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_pali"))->where('komunitas','Pali')->pluck('laki_pali');
        $perempuan_pali = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_pali"))->where('komunitas','Pali')->pluck('perempuan_pali');
        $total_pali = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_pali"))->where('komunitas','Pali')->pluck('total_pali');
        
        $laki_rano = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_rano"))->where('komunitas','Rano')->pluck('laki_rano');
        $perempuan_rano = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_rano"))->where('komunitas','Rano')->pluck('perempuan_rano');
        $total_rano = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_rano"))->where('komunitas','Rano')->pluck('total_rano');
        
        $sangalla = "Sangalla'";
        $laki_sangalla = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_sangalla"))->where('komunitas',$sangalla)->pluck('laki_sangalla');
        $perempuan_sangalla = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_sangalla"))->where('komunitas',$sangalla)->pluck('perempuan_sangalla');
        $total_sangalla = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_sangalla"))->where('komunitas',$sangalla)->pluck('total_sangalla');
        
        $seseng = "Se'seng";
        $laki_seseng = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_seseng"))->where('komunitas',$seseng)->pluck('laki_seseng');
        $perempuan_seseng = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_seseng"))->where('komunitas',$seseng)->pluck('perempuan_seseng');
        $total_seseng = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_seseng"))->where('komunitas',$seseng)->pluck('total_seseng');
        
        $laki_simbuang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_simbuang"))->where('komunitas','Simbuang')->pluck('laki_simbuang');
        $perempuan_simbuang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_simbuang"))->where('komunitas','Simbuang')->pluck('perempuan_simbuang');
        $total_simbuang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_simbuang"))->where('komunitas','Simbuang')->pluck('total_simbuang');
        
        $laki_talion = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_talion"))->where('komunitas','Talion')->pluck('laki_talion');
        $perempuan_talion = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_talion"))->where('komunitas','Talion')->pluck('perempuan_talion');
        $total_talion = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_talion"))->where('komunitas','Talion')->pluck('total_talion');
        
        $laki_tapparan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tapparan"))->where('komunitas','Tapparan')->pluck('laki_tapparan');
        $perempuan_tapparan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tapparan"))->where('komunitas','Tapparan')->pluck('perempuan_tapparan');
        $total_tapparan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tapparan"))->where('komunitas','Tapparan')->pluck('total_tapparan');
        
        $laki_ulusalu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_ulusalu"))->where('komunitas','Ulusalu')->pluck('laki_ulusalu');
        $perempuan_ulusalu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_ulusalu"))->where('komunitas','Ulusalu')->pluck('perempuan_ulusalu');
        $total_ulusalu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_ulusalu"))->where('komunitas','Ulusalu')->pluck('total_ulusalu');
        
        $laki_balusu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_balusu"))->where('komunitas','Balusu')->pluck('laki_balusu');
        $perempuan_balusu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_balusu"))->where('komunitas','Balusu')->pluck('perempuan_balusu');
        $total_balusu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_balusu"))->where('komunitas','Balusu')->pluck('total_balusu');
        
        $laki_buntao = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_buntao"))->where('komunitas','Buntao')->pluck('laki_buntao');
        $perempuan_buntao = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_buntao"))->where('komunitas','Buntao')->pluck('perempuan_buntao');
        $total_buntao = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_buntao"))->where('komunitas','Buntao')->pluck('total_buntao');
        
        $dende = "Dende'";
        $laki_dende = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_dende"))->where('komunitas',$dende)->pluck('laki_dende');
        $perempuan_dende = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_dende"))->where('komunitas',$dende)->pluck('perempuan_dende');
        $total_dende = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_dende"))->where('komunitas',$dende)->pluck('total_dende');
        
        $kesu = "Kesu'";
        $laki_kesu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_kesu"))->where('komunitas',$kesu)->pluck('laki_kesu');
        $perempuan_kesu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_kesu"))->where('komunitas',$kesu)->pluck('perempuan_kesu');
        $total_kesu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_kesu"))->where('komunitas',$kesu)->pluck('total_kesu');
        
        $laki_nanggala = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_nanggala"))->where('komunitas','Nanggala')->pluck('laki_nanggala');
        $perempuan_nanggala = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_nanggala"))->where('komunitas','Nanggala')->pluck('perempuan_nanggala');
        $total_nanggala = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_nanggala"))->where('komunitas','Nanggala')->pluck('total_nanggala');
        
        $pangala = "Pangala'";
        $laki_pangala = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_pangala"))->where('komunitas',$pangala)->pluck('laki_pangala');
        $perempuan_pangala = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_pangala"))->where('komunitas',$pangala)->pluck('perempuan_pangala');
        $total_pangala = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_pangala"))->where('komunitas',$pangala)->pluck('total_pangala');
        
        $laki_piongan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_piongan"))->where('komunitas','Piongan')->pluck('laki_piongan');
        $perempuan_piongan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_piongan"))->where('komunitas','Piongan')->pluck('perempuan_piongan');
        $total_piongan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_piongan"))->where('komunitas','Piongan')->pluck('total_piongan');
        
        $laki_rantebua = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_rantebua"))->where('komunitas','Rantebua')->pluck('laki_rantebua');
        $perempuan_rantebua = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_rantebua"))->where('komunitas','Rantebua')->pluck('perempuan_rantebua');
        $total_rantebua = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_rantebua"))->where('komunitas','Rantebua')->pluck('total_rantebua');
        
        $sadan = "Sa'dan";
        $laki_sadan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_sadan"))->where('komunitas',$sadan)->pluck('laki_sadan');
        $perempuan_sadan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_sadan"))->where('komunitas',$sadan)->pluck('perempuan_sadan');
        $total_sadan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_sadan"))->where('komunitas',$sadan)->pluck('total_sadan');
        
        $laki_tikala = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tikala"))->where('komunitas','Tikala')->pluck('laki_tikala');
        $perempuan_tikala = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tikala"))->where('komunitas','Tikala')->pluck('perempuan_tikala');
        $total_tikala = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tikala"))->where('komunitas','Tikala')->pluck('total_tikala');
        
        $laki_tondon = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tondon"))->where('pengurus_daerah','AMAN Toraya')->where('komunitas','Tondon')->pluck('laki_tondon');
        $perempuan_tondon = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tondon"))->where('pengurus_daerah','AMAN Toraya')->where('komunitas','Tondon')->pluck('perempuan_tondon');
        $total_tondon = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tondon"))->where('pengurus_daerah','AMAN Toraya')->where('komunitas','Tondon')->pluck('total_tondon');
        
        return view('admin.charts.toraya', compact('laki',
                                                'kom',
                                                'indikatif',
                                                'peta',
                                                'total',
                                                'laki_balepe',
                                                'perempuan_balepe',
                                                'total_balepe',
                                                'laki_balla',
                                                'perempuan_balla',
                                                'total_balla',
                                                'laki_banga',
                                                'perempuan_banga',
                                                'total_banga',
                                                'laki_bau',
                                                'perempuan_bau',
                                                'total_bau',
                                                'laki_bittuang',
                                                'perempuan_bittuang',
                                                'total_bittuang',
                                                'laki_buakayu',
                                                'perempuan_buakayu',
                                                'total_buakayu',
                                                'laki_kurra',
                                                'perempuan_kurra',
                                                'total_kurra',
                                                'laki_madandan',
                                                'perempuan_madandan',
                                                'total_madandan',
                                                'laki_makale',
                                                'perempuan_makale',
                                                'total_makale',
                                                'laki_malimbong',
                                                'perempuan_malimbong',
                                                'total_malimbong',
                                                'laki_mappa',
                                                'perempuan_mappa',
                                                'total_mappa',
                                                'laki_mengkendek',
                                                'perempuan_mengkendek',
                                                'total_mengkendek',
                                                'laki_palesan',
                                                'perempuan_palesan',
                                                'total_palesan',
                                                'laki_pali',
                                                'perempuan_pali',
                                                'total_pali',
                                                'laki_rano',
                                                'perempuan_rano',
                                                'total_rano',
                                                'laki_sangalla',
                                                'perempuan_sangalla',
                                                'total_sangalla',
                                                'laki_seseng',
                                                'perempuan_seseng',
                                                'total_seseng',
                                                'laki_simbuang',
                                                'perempuan_simbuang',
                                                'total_simbuang',
                                                'laki_talion',
                                                'perempuan_talion',
                                                'total_talion',
                                                'laki_tapparan',
                                                'perempuan_tapparan',
                                                'total_tapparan',
                                                'laki_ulusalu',
                                                'perempuan_ulusalu',
                                                'total_ulusalu',
                                                'laki_balusu',
                                                'perempuan_balusu',
                                                'total_balusu',
                                                'laki_buntao',
                                                'perempuan_buntao',
                                                'total_buntao',
                                                'laki_dende',
                                                'perempuan_dende',
                                                'total_dende',
                                                'laki_kesu',
                                                'perempuan_kesu',
                                                'total_kesu',
                                                'laki_nanggala',
                                                'perempuan_nanggala',
                                                'total_nanggala',
                                                'laki_pangala',
                                                'perempuan_pangala',
                                                'total_pangala',
                                                'laki_piongan',
                                                'perempuan_piongan',
                                                'total_piongan',
                                                'laki_rantebua',
                                                'perempuan_rantebua',
                                                'total_rantebua',
                                                'laki_sadan',
                                                'perempuan_sadan',
                                                'total_sadan',
                                                'laki_tikala',
                                                'perempuan_tikala',
                                                'total_tikala',
                                                'laki_tondon',
                                                'perempuan_tondon',
                                                'total_tondon',
                                                'perempuan'));
    }
}
