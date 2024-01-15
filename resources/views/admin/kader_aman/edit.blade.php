@extends('admin.dashboard')
@section('content')

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Kader AMAN</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="{{ url('kader_aman/update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $data->nama_lengkap }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Panggilan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_panggilan" value="{{ $data->nama_panggilan}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            {{-- @if ($data->image)
                                <img src="{{ asset('storage/'.$data->image)}}" style="width: 20%">
                            @endif --}}
                                <input type="file" class="form-control @error('image')
                                is-invalid
                                    @enderror" name="image" accept="image/*" value="{{ $data->image }}">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $data->tempat_lahir}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input id="dateTimeFlatpickr" type="date" class="form-control flatpickr flatpickr-input active" name="tgl_lahir" value="{{ $data->tgl_lahir }}" placeholder="{{ $data->tgl_lahir }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="jenis_kelamin">
                                <option hidden value="{{ $data->jenis_kelamin }}">{{ $data->jenis_kelamin }}</option>
                                <option value="Laki-laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Asal Komunitas</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="nama_komunitas">
                                <option hidden value="{{ $data->nama_komunitas }}">{{ $data->nama_komunitas }}</option>
                                @foreach ($anggota as $a)
                                <option value="{{ $a->nama_komunitas }}">{{ $a->nama_komunitas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" value="{{ $data->alamat}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_hp" value="{{ $data->no_hp }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail2" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail2" name="email" value="{{ $data->email }}">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <label class="col-form-label col-sm-2 pt-0">Status Kader</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_kader" id="gridRadios1" value="Aktif" {{$data->status_kader === 'Aktif' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios1">
                                    Aktif
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_kader" id="gridRadios2" value="Tidak Aktif" {{$data->status_kader === 'Tidak Aktif' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Tidak Aktif
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="keterangan" value="{{ $data->keterangan }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label col-sm-3">Pelatihan/Pendidikan Yang telah diikuti</label>
                        <div class="col-sm-8 sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="kegiatan_diikuti[]" value="belum mengikuti pelatihan" {{ in_array( 'belum mengikuti pelatihan', explode(',' , $data->kegiatan_diikuti)) ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridCheck2">
                                    Belum Mengikuti Pelatihan
                                </label>
                            </div>
                            
                            @foreach ($kegiatan as $x)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck2" name="kegiatan_diikuti[]" value="{{ $x->nama_kegiatan }} {{ $x->tahun}}" {{ in_array($x->cek_tahun_kegiatan , explode(',' , $data->kegiatan_diikuti)) ? 'checked' : ''}} >
                                    <label class="form-check-label" for="gridCheck2">
                                        {{ $x->nama_kegiatan }} {{ $x->tahun }}
                                    </label>
                                </div>
                            @endforeach

                            {{-- @foreach ($kegiatan as $key )
                                @if ($data->kegiatan_diikuti == $key)
                                    <input class="form-check-input" type="checkbox" id="gridCheck2" name="kegiatan_diikuti[]" value="{{ $key->nama_kegiatan }}" checked>
                                    <label class="form-check-label" for="gridCheck2">
                                        {{ $key->nama_kegiatan }} {{ $key->tahun }}
                                    </label>
                                @else
                                    <input class="form-check-input" type="checkbox" id="gridCheck2" name="kegiatan_diikuti[]" value="{{ $key->nama_kegiatan }}">
                                    <label class="form-check-label" for="gridCheck2">
                                        {{ $key->nama_kegiatan }} {{ $key->tahun }}
                                    </label>
                                @endif
                                
                            @endforeach --}}
                          
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