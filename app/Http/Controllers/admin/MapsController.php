<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\anggota_aman;
use App\Models\kordinat;
use App\Models\peta_wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\map;

class MapsController extends Controller
{
    public function index()
    {
        $nama_mark = kordinat::all();
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');

        return view('admin.map.index', compact('nama_mark','draw'));
    }

    public function create()
    {
        // $nama_mark = kordinat::select(DB::raw("deskripsi as nama_mark"))->pluck('nama_mark');
        // $nama_mark = DB::table('kordinat')->pluck('deskripsi');
        $nama_mark = kordinat::all();
        $marke = kordinat::select(DB::raw("kordinat as marke"))->pluck('marke');
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');

        return view('admin.map.maps', compact('marke','nama_mark','draw'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pd' => 'required',
            'kord' => 'required',
            'image' => 'mimes:png,jpg,jpeg|image|max:20058',
        ],
            [
                'nama_pd.required' => 'Nama Tempat Tidak Boleh kosong',
                'Kord' => 'Kordinat Tidak Boleh Kosong'
        ]);

        $nama_pd        = $request->nama_pd;
        $nama_komunitas =$request->nama_komunitas;
        $kord           = $request->kord;
        nl2br($deskripsi      = $request->deskripsi);

        if($request->hasFile('image')){
            $path = $request->file('image')->store('uploads');
        }else{
            $path = '';
        }

        $data = new kordinat;
        $data->nama_pd          = $nama_pd;
        $data->nama_komunitas   = $nama_komunitas;
        $data->kordinat         = $kord;
        $data->deskripsi        = $deskripsi;
        $data->image_peta       = $path;

        if ($data->save()){
            return redirect('marker/tabel')->with('success', 'Kordinat Wilayah Berhasil ditambah');
        }
        else{
            return Redirect('marker/tabel')->with('gagal', 'Kordinat Wilayah Gagal ditambah');
        }

    }

    public function getkor($id)
    {
        $marke = kordinat::all();
        
        return response()->json($marke);
    }

    public function peta()
    {
        $nama_mark = kordinat::all();
        $marke = kordinat::select(DB::raw("kordinat as marke"))->pluck('marke');

        return view('admin.map.peta', compact('nama_mark','marke'));
    }

    public function savedraw(Request $request)
    {
        dd($request);
    }
    
    public function tableMarker()
    {
        $mark = kordinat::all();

        return view('admin.map.table_marker', compact('mark'));
    }

    public function edit($id)
    {
        $nama_mark = kordinat::all()->where('id',$id);
        $draw = peta_wilayah::select(DB::raw("polygon as draw"))->pluck('draw');
        $data = kordinat::find($id);
        // dd($draw);

        return view('admin.map.edit_marker', compact('data','nama_mark','draw'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_pd' => 'required',
            'kord' => 'required',
            'image' => 'mimes:png,jpg,jpeg|image|max:20058',
        ],
            [
                'nama_pd.required' => 'Nama Tempat Tidak Boleh kosong',
                'Kord' => 'Kordinat Tidak Boleh Kosong'
        ]);

        $nama_pd        = $request->nama_pd;
        $nama_komunitas =$request->nama_komunitas;
        $kord           = $request->kord;
        nl2br($deskripsi= $request->deskripsi);

        $data = kordinat::find($request['id']);
        $cekfoto = $data->image_peta;
        if($request->hasFile('image')){
            if ($cekfoto != null) {
                Storage::delete($cekfoto);
            }
            $path = $request->file('image')->store('uploads');
        }else{
            $path = $data->image;
        }

        
        $data->nama_pd          = $nama_pd;
        $data->nama_komunitas   = $nama_komunitas;
        $data->kordinat         = $kord;
        $data->deskripsi        = $deskripsi;
        $data->image_peta       = $path;

        if ($data->save()){
            return Redirect('marker/tabel')->with('success', 'Edit Data Berhasil');
        }
        else{
            return Redirect('marker/tabel')->with('gagal', 'Edit Data Gagal');
        }
    }

    public function destroy($id)
    {
        $data = kordinat::find($id);
        $pathfoto = $data->image;
        if ($pathfoto != null || $pathfoto != '') {
            Storage::delete($pathfoto);
        }

        if ($data->delete()) {
            return redirect('marker/tabel')->with('success', 'Peta Wilayah Telah di Hapus');
        } else {
            return back()->with(['Gagal', 'hapus Peta Wilayah gagal']);
        }
    }

    public function detail($id)
    {
        $detail = kordinat::find($id);
        $komunitas = $detail->nama_komunitas;
        $data = anggota_aman::where('komunitas',$komunitas)->first();
        // dd($data);

        return view('admin.map.detail', compact('detail','data'));
    }

    // get json komunitas
    public function getKomunitas($id)
    {
        $kom = anggota_aman::where('pengurus_daerah',$id)->get();

        return response()->json($kom);
    }

}
