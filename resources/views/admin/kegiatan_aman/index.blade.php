@extends('admin.dashboard')
@section('content')
            
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kegiatan AMAN</li>
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
                        <a href="{{ url('kegiatan_aman/create')}}" class="btn btn-outline-success btn-rounded me-4"><i data-feather="user-plus"></i></a>
                        <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tempat</th>
                                    <th>Tahun</th>
                                    <th>Pelaksana</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;
                                @endphp
                                @foreach ($kegiatan as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->tempat }}</td>
                                    <td>{{ $data->tahun }}</td>
                                    <td>{{ $data->pelaksana }}</td>
                                    <td>{{ $data->nama_kegiatan }}</td>
                                    <td>
                                        <form method="POST" action="{{ url('kegiatan_aman/delete/'.$data->id) }}">
                                            @csrf
                                            <a class="btn btn-outline-success btn-icon mb-2 me-2 bs-popover rounded" href="{{ url('kegiatan_aman/edit/'.$data->id) }}" data-bs-container="body" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="Edit">
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
                                    <th>Tempat</th>
                                    <th>Tahun</th>
                                    <th>Pelaksana</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            

@endsection