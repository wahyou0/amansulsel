@extends('admin.dashboard')
@section('content')    
    
    <div class="row layout-spacing ">
        
        <!-- Content -->
        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h3 class="">Profile Kader</h3>
                        {{-- <a href="./user-account-settings.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a> --}}
                    </div>
                    <div class="text-center user-info">
                        <img src="{{ asset('storage/'.$data->image) }}" alt="avatar" style="width: 8cm">
                        <p class="">{{ $data->nama_lengkap }}</p>
                    </div>
                    <div class="user-info-list">

                        <div class="">
                            <ul class="contacts-block list-unstyled">
                                <li class="contacts-block__item">
                                    <i data-feather="user"></i> {{ $data->nama_panggilan }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="home"></i> {{ $data->tempat_lahir }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="calendar"></i> {{ $data->tgl_lahir }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="user"></i> {{ $data->jenis_kelamin }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="map"></i> {{ $data->nama_komunitas }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="map-pin"></i> {{ $data->alamat }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="tablet"></i> {{ $data->no_hp }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="mail"></i> {{ $data->email }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="clipboard"></i> {{ $data->status_kader }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="file-text"></i> {{ $data->keterangan }}
                                </li>
                                <li class="contacts-block__item">
                                    <i data-feather="file-text"></i>Pelatihan Yang Telah Diikuti :
                                </li>
                                @foreach( $keg as $a => $value )
                                <li class="contacts-block__item">
                                    {{ $value }}
                                </li>
                                @endforeach
                            </ul>

                            {{-- <ul class="list-inline mt-4">
                                <li class="list-inline-item mb-0">
                                    <a class="btn btn-info btn-icon btn-rounded" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                    </a>
                                </li>
                                <li class="list-inline-item mb-0">
                                    <a class="btn btn-danger btn-icon btn-rounded" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dribbble"><circle cx="12" cy="12" r="10"></circle><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"></path></svg>
                                    </a>
                                </li>
                                <li class="list-inline-item mb-0">
                                    <a class="btn btn-dark btn-icon btn-rounded" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                    </a>
                                </li>
                            </ul> --}}
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    @endsection