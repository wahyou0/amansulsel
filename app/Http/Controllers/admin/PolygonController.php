<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\peta_wilayah;
use App\Models\kordinat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PolygonController extends Controller
{
    public function index()
    {
        $nama_mark = kordinat::all();
        // $marke = kordinat::select(DB::raw("kordinat as marke"))->pluck('marke');
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');
        // dd($draw);

        return view('admin.map.peta', compact('draw','nama_mark'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pd'           => 'required',
            'nama_komunitas'    => 'required',
            'draw'              => 'required'
        ],
            [
                'nama_pd'                   => 'Pd Tidak Boleh Kosong',
                'draw.required'             => 'Draw Tempat Tidak Boleh kosong',
                'nama_komunitas.required'   => 'Nama Komunitas tidak boleh kosong'
        ]);

        $polygon    = $request->draw;
        $nama       = $request->nama_komunitas;
        $pd         = $request->nama_pd;

        $data = new peta_wilayah;
        $data->polygon          = $polygon;
        $data->nama_komunitas   = $nama;
        $data->nama_pd          = $pd;

        if ($data->save()){
            return redirect('/draw')->with('success', 'Peta Wilayah Berhasil ditambah');
        }
        else{
            return Redirect('/draw')->with('gagal', 'Peta Wilayah Gagal ditambah');
        }
    }

    public function edit($id)
    {
        $nama_mark = kordinat::all();
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->where('id',$id)->pluck('draw');
        $data = peta_wilayah::find($id);
        $wilayah = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');

        return view('admin.map.edit_wilayah', compact('data','nama_mark','draw','wilayah'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_pd'           => 'required',
            'nama_komunitas'    => 'required',
            'draw'              => 'required'
        ],
            [
                'nama_pd'                   => 'Pd Tidak Boleh Kosong',
                'draw.required'             => 'Draw Tempat Tidak Boleh kosong',
                'nama_komunitas.required'   => 'Nama Komunitas tidak boleh kosong'
        ]);

        $polygon    = $request->draw;
        $nama       = $request->nama_komunitas;
        $pd         = $request->nama_pd;

        $data = peta_wilayah::find($request['id']);
        $data->polygon          = $polygon;
        $data->nama_komunitas   = $nama;
        $data->nama_pd          = $pd;

        if ($data->save()){
            return redirect('/map')->with('success', 'Peta Wilayah Berhasil ditambah');
        }
        else{
            return Redirect('/map')->with('gagal', 'Peta Wilayah Gagal ditambah');
        }
    }

    public function tabel()
    {
        $peta = peta_wilayah::all();

        return view('admin.map.table_wilayah', compact('peta'));
    }

    public function destroy($id)
    {
        $data = peta_wilayah::find($id);
        if ($data->delete()) {
            return redirect('draw/tabel')->with('success', 'Peta Wilayah Telah di Hapus');
        } else {
            return back()->with(['Gagal', 'hapus Peta Wilayah gagal']);
        }
    }
    
}
