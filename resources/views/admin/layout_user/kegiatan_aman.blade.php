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
                        <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tempat</th>
                                    <th>Tahun</th>
                                    <th>Pelaksana</th>
                                    <th>Nama Kegiatan</th>
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
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            

@endsection