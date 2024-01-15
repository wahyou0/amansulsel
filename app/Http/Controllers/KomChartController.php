<?php

namespace App\Http\Controllers;

use App\Charts\KomunitasChart;
use Illuminate\Http\Request;
use App\Models\anggota_aman;
use Illuminate\Support\Facades\DB;


class KomChartController extends Controller
{
    
    public function index(KomunitasChart $chart)
    {
        $lakiorong = anggota_aman::select(DB::raw("SUM(jml_laki_laki) as lakiorong"))->where('komunitas','orong')->pluck('lakiorong');
        $wanitaorong = anggota_aman::select(DB::raw("SUM(jml_perempuan) as wanitaorong"))->where('komunitas','orong')->pluck('wanitaorong');
        $totalorong = anggota_aman::select(DB::raw("SUM(jml_perempuan + jml_laki_laki) as total"))->where('komunitas','orong')->pluck('total');
        $arrayorong = $lakiorong->concat($wanitaorong);

        return view('admin.chart', compact('lakiorong','wanitaorong','totalorong','arrayorong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(KomunitasChart $chart)
    {
        // $data['chart'] = $chart->build();

        return view('admin.chart', ['chart' => $chart->build()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
