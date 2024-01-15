<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kegiatan;
use App\Models\kader_aman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\kegiatan_aman;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    
    public function index()
    {
        $kegiatan = kegiatan::all();

        $kader = DB::table('kegiatans')->select('kegiatan')->get();
        $tes = "saya pergi";
        
        $keg = Str::of($kader)->explode(' ');

        // $val = DB::table('kegiatan_aman')->where('id',$keg)->get();
        
        // dd($val);

        return view('admin.kegiatan.index', compact('kegiatan','data'));
    }

    
    public function create()
    {
        $data = kader_aman::all();
        $kegiatan = kegiatan_aman::all();

        return view('admin.kegiatan.create', compact('data','kegiatan'));
    }

    
    public function store(Request $request)
    {
        $model = $request->all();
        $data = new kegiatan();
        $kader = kader_aman::where('id',$model['id_kader'])->first();

        $data->id_kader = $request->input('id_kader');
        $data->nama_kader = $kader['nama_lengkap'];

        $cek = $request->input('kegiatan');
        $data->kegiatan = implode(',' , $cek);
        $data->save();


        // dd($model);
        // $data = DB::table('tabel_anggotas')->select('nama_lengkap')->where('id',$kader)->get();
        // $kader = tabel_anggota::where('id',$model['id_kader'])->first();

        // foreach ($request->input('kegiatan') as $key => $value) {
        //     $input = [
        //         'id_kader' => $request['id_kader'],
        //         'nama_kader' => $kader['nama_lengkap'],
        //         'kegiatan' => $value,
        //     ];
        //     kegiatan::create($input);
        // }

        return redirect('/kegiatan')->with('success', 'Kegiatan Kader Berhasil di Tambah');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Request $request, $id)
    {
        $data = kegiatan::find($id);
        $kader = kader_aman::all();
        $kegiatan = kegiatan_aman::all();
        
        return view('admin.kegiatan.edit', compact('data','kader','kegiatan'));
    }

   
    public function update(Request $request)
    {
        $input = $request->all();
        $kader = kader_aman::where('id',$input['nama_kader'])->first();

        $data = kegiatan::findOrFail($input['id']);
        $data->id_kader = $request->nama_kader;
        $data->nama_kader = $kader->nama_lengkap;
        $data->kegiatan = $request->kegiatan;
        $data->save();
        return redirect('/kegiatan')->with('success', 'Edit Data Berhasil');

        
    }

    
    public function destroy($id)
    {
        $data = kegiatan::find($id);
        if ($data->delete()) {
            return redirect('/kegiatan')->with('success', 'Data Kegiatan Telah di Hapus');
        } else {
            return back()->with(['Gagal', 'hapus Data Kegiatan gagal']);
        }
    }

    public function view($id)
    {
        $data = kegiatan::find($id);

        $kegiatan = kegiatan_aman::all();

        // $keg = Str::of($data->kegiatan)->explode(' ');
        $keg = explode(',' , $data->kegiatan);
        // dd($keg);

        // $kader = kegiatan_aman::where('id',$keg)->get();
        // dd($kader);

        // foreach($keg as $a){
        //     
        // }

        // $kader = Arr::get();
        $kader = kegiatan_aman::where('id',[$keg])->get();
        dd($kader);
        return view('admin.kegiatan.view', compact('data','keg','kader'));
    }
}
