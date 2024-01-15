@extends('admin.dashboard')
@section('content')

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Anggota AMAN</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="{{ url('anggota_aman/update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">No. Anggota</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nomor_anggota" value="{{ $data->nomor_anggota }}">
                        </div>
                    </div><div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Pengesahan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pengesahan" value="{{ $data->pengesahan }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">PD</label>
                        <div class="col-sm-8">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="pengurus_daerah">
                                <option hidden value="{{ $data->pengurus_daerah }}">{{ $data->pengurus_daerah}}</option>
                                <option value="AMAN Gowa">AMAN Gowa</option>
                                <option value="AMAN Majene">AMAN Majene</option>
                                <option value="AMAN Mamasa">AMAN Mamasa</option>
                                <option value="AMAN Maros">AMAN Maros</option>
                                <option value="AMAN Massenrempulu">AMAN Massenrempulu</option>
                                <option value="AMAN Sidrap">AMAN Sidrap</option>
                                <option value="AMAN Sinjai">AMAN Sinjai</option>
                                <option value="AMAN Toraja">AMAN Toraja</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Komunitas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="komunitas" value="{{ $data->komunitas }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Luas Wilayah Indikatif</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="luas_indikatif" value="{{ $data->luas_indikatif }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Luas Wilayah Hasil Pemetaan</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="luas_pemetaan" value="{{ $data->luas_pemetaan }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Laki-Laki</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="jml_laki_laki" value="{{ $data->jml_laki_laki }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Perempuan</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="jml_perempuan" value="{{ $data->jml_perempuan }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection    