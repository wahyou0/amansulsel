<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kegiatan_aman;

class Kegiatan_amanController extends Controller
{
    
    public function index()
    {
        $kegiatan = kegiatan_aman::all();
        
        return view('admin.kegiatan_aman.index', compact('kegiatan'));
    }

    public function create()
    {
        return view('admin.kegiatan_aman.create');
    }

   
    public function store(Request $request)
    {
        $tempat = $request->tempat;
        $tahun = $request->tahun;
        $pelaksana = $request->pelaksana;
        $nama_kegiatan = $request->nama_kegiatan;
        $cek_tahun_kegiatan = $request->nama_kegiatan." ".$request->tahun;

        $data = new kegiatan_aman();
        $data->tempat = $tempat;
        $data->tahun = $tahun;
        $data->pelaksana = $pelaksana;
        $data->nama_kegiatan = $nama_kegiatan;
        $data->cek_tahun_kegiatan = $cek_tahun_kegiatan;
        $data->save();

        if ($data->save()){
            return redirect('/kegiatan_aman')->with('success', 'Kegiatan AMAN Berhasil diambah');
        }
        else{
            return Redirect('/kegiatan_aman')->with('gagal', 'Edit Data Gagal');
        }
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $data = kegiatan_aman::find($id);
        
        return view('admin.kegiatan_aman.edit', compact('data'));
    }

   
    public function update(Request $request)
    {

        $tempat = $request->tempat;
        $tahun = $request->tahun;
        $pelaksana = $request->pelaksana;
        $nama_kegiatan = $request->nama_kegiatan;
        $cek_tahun_kegiatan = $request->nama_kegiatan." ".$request->tahun;

        $data = kegiatan_aman::find($request['id']);
        $data->tempat = $tempat;
        $data->tahun = $tahun;
        $data->pelaksana = $pelaksana;
        $data->nama_kegiatan = $nama_kegiatan;
        $data->cek_tahun_kegiatan = $cek_tahun_kegiatan;
        $data->save();

        if ($data->save()){
            return redirect('/kegiatan_aman')->with('success', 'Data berhasil Diubah');
        }
        else{
            return Redirect('/kegiatan_aman')->with('gagal', 'Data gagal Diubah');
        }
    }

   
    public function destroy($id)
    {
        $data = kegiatan_aman::find($id);
        if ($data->delete()) {
            return redirect('/kegiatan_aman')->with('success', 'Data Telah di Hapus');
        } else {
            return back()->with(['gagal', 'Hapus Data Gagal']);
        }
    }
}
