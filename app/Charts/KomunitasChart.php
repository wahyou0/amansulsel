<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\anggota_aman;
use Illuminate\Support\Facades\DB;

class KomunitasChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $lakiorong = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as lakiorong"))->where('komunitas','orong')->pluck('lakiorong');
        $wanitaorong = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanitaorong"))->where('komunitas','orong')->pluck('wanitaorong');
        $totalorong = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('komunitas','orong')->pluck('total');
        $arrayorong = $lakiorong->concat($wanitaorong);

        return $this->chart->pieChart()
            ->setTitle('Komunitas Orong')
            ->setSubtitle('Season 2021.')
            // ->addData($arrayorong)
            ->setLabels(['Laki-laki', 'Perempuan']);
    }
}
