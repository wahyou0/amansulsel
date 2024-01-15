<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\anggota_aman;

class Anggota_amanController extends Controller
{
    
    public function index()
    {
        $anggota = anggota_aman::all();
        
        return view('admin.anggota_aman.index', compact('anggota'));
    }

    
    public function create()
    {
        return view('admin.anggota_aman.create');
    }

    
    public function store(Request $request)
    {
        $model = $request->all();

        anggota_aman::create($model);
        return redirect('/anggota_aman')->with('success', 'Anggota AMAN Berhasil diTambah');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $data = anggota_aman::find($id);
        
        return view('admin.anggota_aman.edit', compact('data'));
    }

    
    public function update(Request $request)
    {
        $input = $request->all();

        if (anggota_aman::find($input['id'])->update($input)){
            return Redirect('/anggota_aman')->with('success', 'Edit Data Berhasil');
        }
        else{
            return Redirect('/anggota_aman')->with('gagal', 'Edit Data Gagal');
        }
    }

    
    public function destroy($id)
    {
        $data = anggota_aman::find($id);
        if ($data->delete()) {
            return redirect('/anggota_aman')->with('success', 'Data Telah di Hapus');
        } else {
            return back()->with(['gagal', 'Hapus Data Gagal']);
        }
    }
}
