<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\kader_aman;
use App\Models\kegiatan_aman;
use App\Models\anggota_aman;
use Illuminate\Support\Facades\DB;

class Kader_amanController extends Controller
{
    
    public function index()
    {
        $kader = kader_aman::all();

        return view('admin.kader_aman.index', compact('kader'));
    }

    
    public function create()
    {
        $anggota = anggota_aman::all();
        $kegiatan = kegiatan_aman::all();

        return view('admin.kader_aman.create', compact('anggota','kegiatan'));
    }

    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_lengkap' => 'required',
            'image' => 'mimes:png,jpg,jpeg|image|max:5048',
        ],
            [
                'nama_lengkap.required' => 'Nama Lengkap Tidak Boleh kosong',
        ]);


        $n_lengkap = $request->nama_lengkap;
        $n_panggilan = $request->nama_panggilan;
        $t_lahir = $request->tempat_lahir;
        $tgl_lahir = $request->tgl_lahir;
        $jkl = $request->jenis_kelamin;
        $n_komunitas = $request->nama_komunitas;
        $alamat = $request->alamat;
        $nope = $request->no_hp;
        $email = $request->email;
        // dataarraytostring
        $ar = $request->kegiatan_diikuti;
        $keg = implode(',' , $ar);
        
        $status = $request->status_kader;
        $ket = $request->keterangan;

        

        if($request->hasFile('image')){
            $path = $request->file('image')->store('uploads');
        }else{
            $path = '';
        }

        $data = new kader_aman;
        $data->nama_lengkap = $n_lengkap;
        $data->nama_panggilan = $n_panggilan;
        $data->image = $path;
        $data->tempat_lahir = $t_lahir;
        $data->tgl_lahir = $tgl_lahir;
        $data->jenis_kelamin = $jkl;
        $data->nama_komunitas = $n_komunitas;
        $data->alamat = $alamat;
        $data->no_hp = $nope;
        $data->email = $email;
        $data->kegiatan_diikuti = $keg;
        $data->status_kader = $status;
        $data->keterangan = $ket;
        $data->save();

        if ($data->save()){
            return redirect('/kader_aman')->with('success', 'Kegiatan AMAN Berhasil di Tambah');
        }
        else{
            return Redirect('/kader_aman')->with('gagal', 'Edit Data Gagal');
        }
        

        
        // $model = $request->all();

        // $input['kegiatan_diikuti'] = $request->input('kegiatan_diikuti');
        
        // dd($model);
        
        // foreach ($request->input('kegiatan_diikuti') as $key => $value) {
        //     $input = [
        //         'nama_lengkap' => $request['nama_lengkap'],
        //         'nama_panggilan' => $request['nama_panggilan'],
        //         'tempat_lahir' => $request['tempat_lahir'],
        //         'tgl_lahir' => $request['tgl_lahir'],
        //         'jenis_kelamin' => $request['jenis_kelamin'],
        //         'nama_komunitas' => $request['nama_komunitas'],
        //         'alamat' => $request['alamat'],
        //         'no_hp' => $request['no_hp'],
        //         'email' => $request['email'],
        //         'kegiatan_diikuti' => $value,
        //         'status_kader' => $request['status_kader'],
        //         'keterangan' => $request['keterangan'],
        //     ];
        //     kader_aman::create($input);
        // }

        

        return redirect('/kader_aman')->with('success', 'Kegiatan AMAN Berhasil di Tambah');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $data = kader_aman::find($id);

        $anggota = anggota_aman::all();
        $kegiatan = kegiatan_aman::all();

        $keg = explode(',' , $data->kegiatan_diikuti);
        $cek = DB::select('select nama_kegiatan,tahun from kegiatan_aman');
        foreach ($cek as $key => $value) {
            $a[] = $value->nama_kegiatan." ".$value->tahun;
        }
        
        // dd($a);
        
        return view('admin.kader_aman.edit', compact('data','anggota','kegiatan','keg','cek','a'));
    }

    
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'mimes:png,jpg,jpeg|image|max:5048',
        ]);


        $n_lengkap = $request->nama_lengkap;
        $n_panggilan = $request->nama_panggilan;
        $t_lahir = $request->tempat_lahir;
        $tgl_lahir = $request->tgl_lahir;
        $jkl = $request->jenis_kelamin;
        $n_komunitas = $request->nama_komunitas;
        $alamat = $request->alamat;
        $nope = $request->no_hp;
        $email = $request->email;
        // dataarraytostring
        $ar = $request->kegiatan_diikuti;
        $keg = implode(',' , $ar);
        
        $status = $request->status_kader;
        $ket = $request->keterangan;


        $data = kader_aman::find($request['id']);
        $cekfoto = $data->image;

        if($request->hasFile('image')){
            if ($cekfoto != null) {
                Storage::delete($cekfoto);
            }
            $path = $request->file('image')->store('uploads');
        }else{
            $path = $data->image;
        }

        $data->nama_lengkap = $n_lengkap;
        $data->nama_panggilan = $n_panggilan;
        $data->image = $path;
        $data->tempat_lahir = $t_lahir;
        $data->tgl_lahir = $tgl_lahir;
        $data->jenis_kelamin = $jkl;
        $data->nama_komunitas = $n_komunitas;
        $data->alamat = $alamat;
        $data->no_hp = $nope;
        $data->email = $email;
        $data->kegiatan_diikuti = $keg;
        $data->status_kader = $status;
        $data->keterangan = $ket;

        // $a = $request->input('kegiatan_diikuti');

        // $data = kader_aman::findOrFail($request['id']);
        // $data->nama_lengkap = $request->nama_lengkap;
        // $data->nama_panggilan = $request->nama_panggilan;
        // $data->tempat_lahir = $request->tempat_lahir;
        // $data->tgl_lahir = $request->tgl_lahir;
        // $data->jenis_kelamin = $request->jenis_kelamin;
        // $data->nama_komunitas = $request->nama_komunitas;
        // $data->alamat = $request->alamat;
        // $data->no_hp = $request->no_hp;
        // $data->email = $request->email;
        // $data->kegiatan_diikuti = $request->kegiatan_diikuti;
        // $data->status_kader = $request->status_kader;
        // $data->keterangan = $request->keterangan;

        if ($data->save()){
            return Redirect('/kader_aman')->with('success', 'Edit Data Berhasil');
        }
        else{
            return Redirect('/kader_aman')->with('gagal', 'Edit Data Gagal');
        }
    }

    
    public function destroy($id)
    {
        $data = kader_aman::find($id);
        $pathfoto = $data->image;

        if ($pathfoto != null || $pathfoto != '') {
            Storage::delete($pathfoto);
        }
        if ($data->delete()) {
            return redirect('/kader_aman')->with('success', 'Data Telah di Hapus');
        } else {
            return back()->with(['gagal', 'Hapus Data Gagal']);
        }
    }

    public function view($id)
    {
        $data = kader_aman::find($id);

        $keg = explode(',' , $data->kegiatan_diikuti);

        
        return view('admin.kader_aman.view', compact('data','keg'));
    }
}
