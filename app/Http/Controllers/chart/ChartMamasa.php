<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use App\Models\anggota_aman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartMamasa extends Controller
{
    public function mamasa()
    {
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->where('pengurus_daerah','AMAN Mamasa')->pluck('laki');
        $perempuan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan"))->where('pengurus_daerah','AMAN Mamasa')->pluck('perempuan');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Mamasa')->pluck('kom');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Mamasa')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Mamasa')->pluck('peta');
        $total = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('pengurus_daerah','AMAN Mamasa')->pluck('total');

        $laki_aralle = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_aralle"))->where('komunitas','Aralle')->pluck('laki_aralle');
        $perempuan_aralle = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_aralle"))->where('komunitas','Aralle')->pluck('perempuan_aralle');
        $total_aralle = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_aralle"))->where('komunitas','Aralle')->pluck('total_aralle');
        
        $laki_balla_messalu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_balla_messalu"))->where('komunitas','Balla Messalu')->pluck('laki_balla_messalu');
        $perempuan_balla_messalu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_balla_messalu"))->where('komunitas','Balla Messalu')->pluck('perempuan_balla_messalu');
        $total_balla_messalu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_balla_messalu"))->where('komunitas','Balla Messalu')->pluck('total_balla_messalu');
        
        $laki_balla_satanetean = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_balla_satanetean"))->where('komunitas','Balla Satanetean')->pluck('laki_balla_satanetean');
        $perempuan_balla_satanetean = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_balla_satanetean"))->where('komunitas','Balla Satanetean')->pluck('perempuan_balla_satanetean');
        $total_balla_satanetean = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_balla_satanetean"))->where('komunitas','Balla Satanetean')->pluck('total_balla_satanetean');
        
        $laki_balla_tumuka = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_balla_tumuka"))->where('komunitas','Balla Tumuka')->pluck('laki_balla_tumuka');
        $perempuan_balla_tumuka = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_balla_tumuka"))->where('komunitas','Balla Tumuka')->pluck('perempuan_balla_tumuka');
        $total_balla_tumuka = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_balla_tumuka"))->where('komunitas','Balla Tumuka')->pluck('total_balla_tumuka');
        
        $laki_bambang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_bambang"))->where('komunitas','Bambang')->pluck('laki_bambang');
        $perempuan_bambang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_bambang"))->where('komunitas','Bambang')->pluck('perempuan_bambang');
        $total_bambang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_bambang"))->where('komunitas','Bambang')->pluck('total_bambang');
        
        $laki_lembangna = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_lembangna"))->where('komunitas','Lembangna Salulo')->pluck('laki_lembangna');
        $perempuan_lembangna = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_lembangna"))->where('komunitas','Lembangna Salulo')->pluck('perempuan_lembangna');
        $total_lembangna = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_lembangna"))->where('komunitas','Lembangna Salulo')->pluck('total_lembangna');
        
        $laki_makuang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_makuang"))->where('komunitas','Makuang')->pluck('laki_makuang');
        $perempuan_makuang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_makuang"))->where('komunitas','Makuang')->pluck('perempuan_makuang');
        $total_makuang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_makuang"))->where('komunitas','Makuang')->pluck('total_makuang');
        
        $malabo = "Mala'bo";
        $laki_malabo = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_malabo"))->where('komunitas',$malabo)->pluck('laki_malabo');
        $perempuan_malabo = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_malabo"))->where('komunitas',$malabo)->pluck('perempuan_malabo');
        $total_malabo = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_malabo"))->where('komunitas',$malabo)->pluck('total_malabo');
        
        $laki_mambi = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_mambi"))->where('komunitas','Mambi')->pluck('laki_mambi');
        $perempuan_mambi = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_mambi"))->where('komunitas','Mambi')->pluck('perempuan_mambi');
        $total_mambi = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_mambi"))->where('komunitas','Mambi')->pluck('total_mambi');
        
        $laki_messawa = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_messawa"))->where('komunitas','Messawa')->pluck('laki_messawa');
        $perempuan_messawa = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_messawa"))->where('komunitas','Messawa')->pluck('perempuan_messawa');
        $total_messawa = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_messawa"))->where('komunitas','Messawa')->pluck('total_messawa');
        
        $laki_nosu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_nosu"))->where('komunitas','Nosu')->pluck('laki_nosu');
        $perempuan_nosu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_nosu"))->where('komunitas','Nosu')->pluck('perempuan_nosu');
        $total_nosu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_nosu"))->where('komunitas','Nosu')->pluck('total_nosu');
        
        $laki_orobua = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_orobua"))->where('komunitas','Orobua')->pluck('laki_orobua');
        $perempuan_orobua = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_orobua"))->where('komunitas','Orobua')->pluck('perempuan_orobua');
        $total_orobua = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_orobua"))->where('komunitas','Orobua')->pluck('total_orobua');
        
        $laki_osango = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_osango"))->where('komunitas','Osango')->pluck('laki_osango');
        $perempuan_osango = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_osango"))->where('komunitas','Osango')->pluck('perempuan_osango');
        $total_osango = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_osango"))->where('komunitas','Osango')->pluck('total_osango');
        
        $namakomunitas = "Pana'";
        $laki_pana = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_pana"))->where('komunitas',$namakomunitas)->pluck('laki_pana');
        $perempuan_pana = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_pana"))->where('komunitas',$namakomunitas)->pluck('perempuan_pana');
        $total_pana = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_pana"))->where('komunitas',$namakomunitas)->pluck('total_pana');
        
        $laki_ralle_anaq = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_ralle_anaq"))->where('komunitas','Ralle Anaq')->pluck('laki_ralle_anaq');
        $perempuan_ralle_anaq = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_ralle_anaq"))->where('komunitas','Ralle Anaq')->pluck('perempuan_ralle_anaq');
        $total_ralle_anaq = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_ralle_anaq"))->where('komunitas','Ralle Anaq')->pluck('total_ralle_anaq');
        
        $laki_rambusaratu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_rambusaratu"))->where('komunitas','Rambusaratu')->pluck('laki_rambusaratu');
        $perempuan_rambusaratu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_rambusaratu"))->where('komunitas','Rambusaratu')->pluck('perempuan_rambusaratu');
        $total_rambusaratu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_rambusaratu"))->where('komunitas','Rambusaratu')->pluck('total_rambusaratu');
        
        $laki_rantebulahan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_rantebulahan"))->where('komunitas','Rantebulahan')->pluck('laki_rantebulahan');
        $perempuan_rantebulahan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_rantebulahan"))->where('komunitas','Rantebulahan')->pluck('perempuan_rantebulahan');
        $total_rantebulahan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_rantebulahan"))->where('komunitas','Rantebulahan')->pluck('total_rantebulahan');
        
        $laki_saloan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_saloan"))->where('komunitas','Saloan')->pluck('laki_saloan');
        $perempuan_saloan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_saloan"))->where('komunitas','Saloan')->pluck('perempuan_saloan');
        $total_saloan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_saloan"))->where('komunitas','Saloan')->pluck('total_saloan');
        
        $laki_sapan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_sapan"))->where('komunitas','Sapan')->pluck('laki_sapan');
        $perempuan_sapan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_sapan"))->where('komunitas','Sapan')->pluck('perempuan_sapan');
        $total_sapan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_sapan"))->where('komunitas','Sapan')->pluck('total_sapan');
        
        $laki_sepang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_sepang"))->where('komunitas','Sepang')->pluck('laki_sepang');
        $perempuan_sepang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_sepang"))->where('komunitas','Sepang')->pluck('perempuan_sepang');
        $total_sepang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_sepang"))->where('komunitas','Sepang')->pluck('total_sepang');
        
        $laki_sindaga_manik = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_sindaga_manik"))->where('komunitas','Sindaga Manik Parondo Bulawan')->pluck('laki_sindaga_manik');
        $perempuan_sindaga_manik = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_sindaga_manik"))->where('komunitas','Sindaga Manik Parondo Bulawan')->pluck('perempuan_sindaga_manik');
        $total_sindaga_manik = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_sindaga_manik"))->where('komunitas','Sindaga Manik Parondo Bulawan')->pluck('total_sindaga_manik');
        
        $laki_tabang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tabang"))->where('komunitas','Tabang')->pluck('laki_tabang');
        $perempuan_tabang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tabang"))->where('komunitas','Tabang')->pluck('perempuan_tabang');
        $total_tabang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tabang"))->where('komunitas','Tabang')->pluck('total_tabang');
        
        $laki_tabulahan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tabulahan"))->where('komunitas','Tabulahan')->pluck('laki_tabulahan');
        $perempuan_tabulahan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tabulahan"))->where('komunitas','Tabulahan')->pluck('perempuan_tabulahan');
        $total_tabulahan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tabulahan"))->where('komunitas','Tabulahan')->pluck('total_tabulahan');
        
        $laki_tawalian = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tawalian"))->where('komunitas','Tawalian')->pluck('laki_tawalian');
        $perempuan_tawalian = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tawalian"))->where('komunitas','Tawalian')->pluck('perempuan_tawalian');
        $total_tawalian = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tawalian"))->where('komunitas','Tawalian')->pluck('total_tawalian');
        
        return view('admin.charts.mamasa', compact('laki',
                                                'kom',
                                                'indikatif',
                                                'peta',
                                                'total',
                                                'laki_aralle',
                                                'perempuan_aralle',
                                                'total_aralle',
                                                'laki_balla_messalu',
                                                'perempuan_balla_messalu',
                                                'total_balla_messalu',
                                                'laki_balla_satanetean',
                                                'perempuan_balla_satanetean',
                                                'total_balla_satanetean',
                                                'laki_balla_tumuka',
                                                'perempuan_balla_tumuka',
                                                'total_balla_tumuka',
                                                'laki_bambang',
                                                'perempuan_bambang',
                                                'total_bambang',
                                                'laki_lembangna',
                                                'perempuan_lembangna',
                                                'total_lembangna',
                                                'laki_makuang',
                                                'perempuan_makuang',
                                                'total_makuang',
                                                'laki_malabo',
                                                'perempuan_malabo',
                                                'total_malabo',
                                                'laki_mambi',
                                                'perempuan_mambi',
                                                'total_mambi',
                                                'laki_messawa',
                                                'perempuan_messawa',
                                                'total_messawa',
                                                'laki_nosu',
                                                'perempuan_nosu',
                                                'total_nosu',
                                                'laki_orobua',
                                                'perempuan_orobua',
                                                'total_orobua',
                                                'laki_osango',
                                                'perempuan_osango',
                                                'total_osango',
                                                'laki_pana',
                                                'perempuan_pana',
                                                'total_pana',
                                                'laki_ralle_anaq',
                                                'perempuan_ralle_anaq',
                                                'total_ralle_anaq',
                                                'laki_rambusaratu',
                                                'perempuan_rambusaratu',
                                                'total_rambusaratu',
                                                'laki_rantebulahan',
                                                'perempuan_rantebulahan',
                                                'total_rantebulahan',
                                                'laki_saloan',
                                                'perempuan_saloan',
                                                'total_saloan',
                                                'laki_sapan',
                                                'perempuan_sapan',
                                                'total_sapan',
                                                'laki_sepang',
                                                'perempuan_sepang',
                                                'total_sepang',
                                                'laki_sindaga_manik',
                                                'perempuan_sindaga_manik',
                                                'total_sindaga_manik',
                                                'laki_tabang',
                                                'perempuan_tabang',
                                                'total_tabang',
                                                'laki_tabulahan',
                                                'perempuan_tabulahan',
                                                'total_tabulahan',
                                                'laki_tawalian',
                                                'perempuan_tawalian',
                                                'total_tawalian',
                                                'perempuan'));
    }
}
