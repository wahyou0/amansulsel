@extends('admin.dashboard')
@section('content')

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Marker Wilayah Adat</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <!--  BEGIN BREADCRUMBS  -->
    
        <!--  END BREADCRUMBS  -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <a href="{{ url('map/create') }}" class="btn btn-outline-success btn-rounded me-4 bs-popover rounded" data-bs-container="body" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="Tambah Mark">
                        <i data-feather="user-plus"></i>
                    </a>
                    <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Nama PD</th>
                                <th>Nama Komunitas</th>
                                <th>Kordinat</th>
                                {{-- <th>Deskripsi</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach ($mark as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('storage/'.$data->image_peta)}}" alt="" style="width: 2cm"></td>
                                <td>{{ $data->nama_pd }}</td>
                                <td>{{ $data->nama_komunitas }}</td>
                                <td>{{ $data->kordinat }}</td>
                                {{-- <td>{{ $data->deskripsi }}</td> --}}
                                <td>
                                    <form method="POST" action="{{ url('marker/delete/'.$data->id) }}">
                                        @csrf
                                        {{-- <a class="btn btn-outline-success btn-icon mb-2 me-2" href="{{ url('kegiatan/view/'.$data->id) }}">
                                            <i data-feather="eye"></i>
                                        </a> --}}
                                        <a class="btn btn-outline-success btn-icon mb-2 me-2 bs-popover rounded" href="{{ url('marker/edit/'.$data->id) }}"  data-bs-container="body" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="Edit">
                                                <i data-feather="edit"></i>
                                        </a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-outline-danger btn-icon mb-2 me-2 bs-popover rounded show-confirm" data-bs-container="body" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="Hapus">
                                            <i data-feather="trash-2"></i>
                                        </button>
                                        
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Nama PD</th>
                                <th>Nama Komunitas</th>
                                <th>Kordinat</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection