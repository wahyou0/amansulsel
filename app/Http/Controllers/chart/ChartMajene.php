<?php

namespace App\Http\Controllers\chart;

use App\Http\Controllers\Controller;
use App\Models\anggota_aman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartMajene extends Controller
{
    public function majene()
    {
        $laki = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki"))->where('pengurus_daerah','AMAN Majene')->pluck('laki');
        $perempuan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan"))->where('pengurus_daerah','AMAN Majene')->pluck('perempuan');
        $kom = anggota_aman::select(DB::raw("komunitas as kom"))->where('pengurus_daerah','AMAN Majene')->pluck('kom');
        $indikatif = anggota_aman::select(DB::raw("luas_indikatif as indikatif"))->where('pengurus_daerah','AMAN Majene')->pluck('indikatif');
        $peta = anggota_aman::select(DB::raw("luas_pemetaan as peta"))->where('pengurus_daerah','AMAN Majene')->pluck('peta');
        $total = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('pengurus_daerah','AMAN Majene')->pluck('total');

        $laki_adolang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_adolang"))->where('komunitas','Adolang')->pluck('laki_adolang');
        $perempuan_adolang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_adolang"))->where('komunitas','Adolang')->pluck('perempuan_adolang');
        $total_adolang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_adolang"))->where('komunitas','Adolang')->pluck('total_adolang');
        
        $laki_banggae = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_banggae"))->where('komunitas','Banggae')->pluck('laki_banggae');
        $perempuan_banggae = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_banggae"))->where('komunitas','Banggae')->pluck('perempuan_banggae');
        $total_banggae = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_banggae"))->where('komunitas','Banggae')->pluck('total_banggae');
        
        $laki_buttu_bagasa = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_buttu_bagasa"))->where('komunitas','Buttu Bagasa Tande')->pluck('laki_buttu_bagasa');
        $perempuan_buttu_bagasa = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_buttu_bagasa"))->where('komunitas','Buttu Bagasa Tande')->pluck('perempuan_buttu_bagasa');
        $total_buttu_bagasa = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_buttu_bagasa"))->where('komunitas','Buttu Bagasa Tande')->pluck('total_buttu_bagasa');
        
        $laki_lambe_allu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_lambe_allu"))->where('komunitas','Lambe Allu')->pluck('laki_lambe_allu');
        $perempuan_lambe_allu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_lambe_allu"))->where('komunitas','Lambe Allu')->pluck('perempuan_lambe_allu');
        $total_lambe_allu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_lambe_allu"))->where('komunitas','Lambe Allu')->pluck('total_lambe_allu');
        
        $laki_limboro_rambu = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_limboro_rambu"))->where('komunitas','Limboro Rambu-Rambu')->pluck('laki_limboro_rambu');
        $perempuan_limboro_rambu = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_limboro_rambu"))->where('komunitas','Limboro Rambu-Rambu')->pluck('perempuan_limboro_rambu');
        $total_limboro_rambu = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_limboro_rambu"))->where('komunitas','Limboro Rambu-Rambu')->pluck('total_limboro_rambu');
        
        $laki_mekkatta = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_mekkatta"))->where('komunitas','Mekkatta/Lombong Mekkatta')->pluck('laki_mekkatta');
        $perempuan_mekkatta = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_mekkatta"))->where('komunitas','Mekkatta/Lombong Mekkatta')->pluck('perempuan_mekkatta');
        $total_mekkatta = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_mekkatta"))->where('komunitas','Mekkatta/Lombong Mekkatta')->pluck('total_mekkatta');
        
        $laki_pamboang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_pamboang"))->where('komunitas','Pamboang')->pluck('laki_pamboang');
        $perempuan_pamboang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_pamboang"))->where('komunitas','Pamboang')->pluck('perempuan_pamboang');
        $total_pamboang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_pamboang"))->where('komunitas','Pamboang')->pluck('total_pamboang');
        
        $laki_paminggalan = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_paminggalan"))->where('komunitas','Paminggalan')->pluck('laki_paminggalan');
        $perempuan_paminggalan = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_paminggalan"))->where('komunitas','Paminggalan')->pluck('perempuan_paminggalan');
        $total_paminggalan = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_paminggalan"))->where('komunitas','Paminggalan')->pluck('total_paminggalan');
        
        $laki_panggalo = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_panggalo"))->where('komunitas','Panggalo/pangalo')->pluck('laki_panggalo');
        $perempuan_panggalo = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_panggalo"))->where('komunitas','Panggalo/pangalo')->pluck('perempuan_panggalo');
        $total_panggalo = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_panggalo"))->where('komunitas','Panggalo/pangalo')->pluck('total_panggalo');
        
        $laki_popenga = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_popenga"))->where('komunitas','Popenga')->pluck('laki_popenga');
        $perempuan_popenga = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_popenga"))->where('komunitas','Popenga')->pluck('perempuan_popenga');
        $total_popenga = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_popenga"))->where('komunitas','Popenga')->pluck('total_popenga');
        
        $laki_poralle_salabose = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_poralle_salabose"))->where('komunitas','Poralle salabose')->pluck('laki_poralle_salabose');
        $perempuan_poralle_salabose = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_poralle_salabose"))->where('komunitas','Poralle salabose')->pluck('perempuan_poralle_salabose');
        $total_poralle_salabose = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_poralle_salabose"))->where('komunitas','Poralle salabose')->pluck('total_poralle_salabose');
        
        $laki_puttada = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_puttada"))->where('komunitas','Puttada')->pluck('laki_puttada');
        $perempuan_puttada = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_puttada"))->where('komunitas','Puttada')->pluck('perempuan_puttada');
        $total_puttada = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_puttada"))->where('komunitas','Puttada')->pluck('total_puttada');
        
        $laki_sambaho = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_sambaho"))->where('komunitas','Sambaho')->pluck('laki_sambaho');
        $perempuan_sambaho = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_sambaho"))->where('komunitas','Sambaho')->pluck('perempuan_sambaho');
        $total_sambaho = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_sambaho"))->where('komunitas','Sambaho')->pluck('total_sambaho');
        
        $laki_sendana = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_sendana"))->where('komunitas','Sendana')->pluck('laki_sendana');
        $perempuan_sendana = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_sendana"))->where('komunitas','Sendana')->pluck('perempuan_sendana');
        $total_sendana = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_sendana"))->where('komunitas','Sendana')->pluck('total_sendana');
        
        $laki_tandu_masadi = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tandu_masadi"))->where('komunitas','Tandu Masadi Salutahongan')->pluck('laki_tandu_masadi');
        $perempuan_tandu_masadi = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tandu_masadi"))->where('komunitas','Tandu Masadi Salutahongan')->pluck('perempuan_tandu_masadi');
        $total_tandu_masadi = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tandu_masadi"))->where('komunitas','Tandu Masadi Salutahongan')->pluck('total_tandu_masadi');
        
        $laki_tubo = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tubo"))->where('komunitas','Tubo')->pluck('laki_tubo');
        $perempuan_tubo = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tubo"))->where('komunitas','Tubo')->pluck('perempuan_tubo');
        $total_tubo = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tubo"))->where('komunitas','Tubo')->pluck('total_tubo');
        
        $laki_tuho_lombang = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_tuho_lombang"))->where('komunitas','Tuho Lombang')->pluck('laki_tuho_lombang');
        $perempuan_tuho_lombang = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_tuho_lombang"))->where('komunitas','Tuho Lombang')->pluck('perempuan_tuho_lombang');
        $total_tuho_lombang = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_tuho_lombang"))->where('komunitas','Tuho Lombang')->pluck('total_tuho_lombang');
        
        $laki_ulumanda = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as laki_ulumanda"))->where('komunitas','Ulumanda')->pluck('laki_ulumanda');
        $perempuan_ulumanda = anggota_aman::select(DB::raw("SUM(jml_perempuan) as perempuan_ulumanda"))->where('komunitas','Ulumanda')->pluck('perempuan_ulumanda');
        $total_ulumanda = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total_ulumanda"))->where('komunitas','Ulumanda')->pluck('total_ulumanda');
        
        return view('admin.charts.majene', compact('laki',
                                                'kom',
                                                'indikatif',
                                                'peta',
                                                'total',
                                                'laki_adolang',
                                                'perempuan_adolang',
                                                'total_adolang',
                                                'laki_banggae',
                                                'perempuan_banggae',
                                                'total_banggae',
                                                'laki_buttu_bagasa',
                                                'perempuan_buttu_bagasa',
                                                'total_buttu_bagasa',
                                                'laki_lambe_allu',
                                                'perempuan_lambe_allu',
                                                'total_lambe_allu',
                                                'laki_limboro_rambu',
                                                'perempuan_limboro_rambu',
                                                'total_limboro_rambu',
                                                'laki_mekkatta',
                                                'perempuan_mekkatta',
                                                'total_mekkatta',
                                                'laki_pamboang',
                                                'perempuan_pamboang',
                                                'total_pamboang',
                                                'laki_paminggalan',
                                                'perempuan_paminggalan',
                                                'total_paminggalan',
                                                'laki_panggalo',
                                                'perempuan_panggalo',
                                                'total_panggalo',
                                                'laki_popenga',
                                                'perempuan_popenga',
                                                'total_popenga',
                                                'laki_poralle_salabose',
                                                'perempuan_poralle_salabose',
                                                'total_poralle_salabose',
                                                'laki_puttada',
                                                'perempuan_puttada',
                                                'total_puttada',
                                                'laki_sambaho',
                                                'perempuan_sambaho',
                                                'total_sambaho',
                                                'laki_sendana',
                                                'perempuan_sendana',
                                                'total_sendana',
                                                'laki_tandu_masadi',
                                                'perempuan_tandu_masadi',
                                                'total_tandu_masadi',
                                                'laki_tubo',
                                                'perempuan_tubo',
                                                'total_tubo',
                                                'laki_tuho_lombang',
                                                'perempuan_tuho_lombang',
                                                'total_tuho_lombang',
                                                'laki_ulumanda',
                                                'perempuan_ulumanda',
                                                'total_ulumanda',
                                                'perempuan'));
    }
}
