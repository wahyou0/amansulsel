@extends('admin.dashboard')
@section('content')

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Kegiatan AMAN</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="{{ url('kegiatan_aman/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tempat Kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tahun Kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tahun">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Pelaksana</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pelaksana">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_kegiatan">
                        </div>
                    </div>
{{--                     
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penguatan Kapasitas Yang Telah Diikuti</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_kegiatan">
                        </div>
                    </div> --}}
                    <div class="row mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection    