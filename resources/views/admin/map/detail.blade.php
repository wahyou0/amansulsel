@extends('admin.dashboard')
@section('content')

    <div id="card_12" class="col-xxl-12 col-xl-12 col-lg-12  col-md-6 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">

                <div class="row">
                    
                    <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-6 mx-auto">

                        <div class="card">
                            <a href="{{ asset('storage/'.$detail->image_peta)}}" class="defaultGlightbox glightbox-content">
                                <img src="{{ asset('storage/'.$detail->image_peta)}}" alt="image" class="img-fluid" />
                            </a>
                            <div class="card-body">
                                <div class="post-content">
                                    <h4>Deskripsi</h4>
                                    <ul class="mb-5">
                                        <li class="mb-1">Nama PD : {{ $detail->nama_pd}}</li>
                                        <li class="mb-1">NAma Komunitas : {{ $detail->nama_komunitas}}</li>
                                        <li class="mb-1">Luas Peta Indikatif : {{ number_format($data->luas_indikatif )}} Ha</li>
                                        <li class="mb-1">Luas Wilayah Hasil Pemetaan : {{ number_format($data->luas_pemetaan )}} Ha</li>
                                        <li class="mb-1">Jumlah Laki-Laki : {{ number_format($data->jml_laki_laki) }} Jiwa</li>
                                        <li class="mb-1">Jumlah Perempuan : {{ number_format($data->jml_perempuan) }} Jiwa</li>
                                        <li class="mb-1">Total: {{ number_format($data->jml_perempuan + $data->jml_laki_laki) }} Jiwa</li>
                                    </ul>

                                    <p class="mb-5" style="white-space: pre-line">{{ $detail->deskripsi }}</p>

                                    
                                </div>
                                {{-- <a href="#" class="btn btn-secondary mt-3">Go somewhere</a> --}}
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

@endsection