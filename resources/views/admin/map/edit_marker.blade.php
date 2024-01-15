@extends('admin.dashboard')
@section('content')
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

     <style>
        #map { height: 600px; }
     </style>

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Peta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Marker</li>
            </ol>
        </nav>
    </div>
    <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="row mb-3">
                <div id="map"></div>
            </div>
                <form action="{{ url('marker/update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">PD</label>
                        <div class="col-sm-10">
                            <select id="PD" class="form-control @error('nama_pd')
                                    is-invalid
                                @enderror" placeholder="Select..." autocomplete="off" name="nama_pd">
                                @error('nama_pd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <option hidden value="{{ $data->nama_pd }}">{{ $data->nama_pd }}</option>
                                <option value="AMAN Gowa">AMAN Gowa</option>
                                <option value="AMAN Majene">AMAN Majene</option>
                                <option value="AMAN Mamasa">AMAN Mamasa</option>
                                <option value="AMAN Maros">AMAN Maros</option>
                                <option value="AMAN Massenrempulu">AMAN Massenrempulu</option>
                                <option value="AMAN Sidrap">AMAN Sidrap</option>
                                <option value="AMAN Sinjai">AMAN Sinjai</option>
                                <option value="AMAN Toraya">AMAN Toraya</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Komunitas</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="nama_komunitas" id="komunitas" required>
                                    <option value="{{ $data->nama_komunitas }}">{{ $data->nama_komunitas }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kordinat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('kord')
                                    is-invalid
                                @enderror" name="kord" id="kordinat" value="{{ $data->kordinat }}">
                                @error('kord')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control @error('image')
                                    is-invalid
                                @enderror" name="image" accept="image/*">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-sm-2"> Deskripsi </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi" cols="30" rows="15" required>{{ $data->deskripsi }}</textarea>
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <label class="col-sm-2"> Deskripsi </label>
                        <div class="col-sm-10">
                            <div id="autosaving" class=" layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-content widget-content-area">
        
                                        <textarea id="demo2" name="deskripsi">

                                        </textarea>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="row mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    //    var map = L.map('map').setView([-3.4631462911833157, 119.72486189225056], 8);
   
   osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
       maxZoom: 20,
       attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
   });
    //    def.addTo(osm);

   var map = L.map('map',{
    center:[-3.4631462911833157, 119.72486189225056],
    zoom:8,
    layers:[osm]
   });

   var marker = L.marker([-5.169672875495814,119.45430546998979],{
       draggable:true
   })
   .bindPopup('AMAN SUl-SEL')
   .addTo(map);
   
   
   @foreach ( $nama_mark as $item )
        var mar = L.marker([{{ $item->kordinat }}],{
            
        })
        .bindPopup('{{ $item->nama_komunitas }}')
        .addTo(map);
   @endforeach
   

   var Thunderforest_Landscape = L.tileLayer('https://{s}.tile.thunderforest.com/landscape/{z}/{x}/{y}.png?apikey={apikey}', {
        attribution: '&copy; <a href="http://www.thunderforest.com/">Thunderforest</a>, &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        apikey: '<your apikey>',
        maxZoom: 22
    });
    // Thunderforest_Landscape.addTo(map);


    //tampilan google map
    googleSat = L.tileLayer('http://{s}.google.com/vt?lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    // googleSat.addTo(map);

    googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    // googleStreets.addTo(map);

    googleHybrid = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    // googleHybrid.addTo(map);

    googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=p&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });


    

    // var polygon = L.polygon([
    //     [-5.160539825267394, 119.40578679341385],
    //     [-5.15708947208411, 119.43090359310312],
    //     [-5.1320738514554956, 119.43552277465518],
    //     [-5.128910886939595, 119.40751898649587]
    // ]);
    // polygon.addTo(map);


    // var popup = L.popup();


    // function onMapClick(e) {
    //     popup
    //         .setLatLng(e.latlng)
    //         .setContent("location." + e.latlng.toString())
    //         .openOn(map);
    // }
    // map.on('click', onMapClick);

    @foreach ( $draw as $item )
        var poly = @json($item);   
        var randColor = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
        var layer = L.geoJSON(JSON.parse(poly)).addTo(map);
        window.layer.setStyle({fillColor: '#8B008B',
                            "color": randColor,
                            "weight": 3,
                            "opacity": 9}).addTo(map);
        
    @endforeach

    // var bounds = layer.getBounds();
    //     map.fitBounds(bounds);

    
    var baseMaps = {
        'google satelit': googleSat,
        'google streets': googleStreets,
        'google hybrid': googleHybrid,
        'Terrain': googleTerrain,
        'default': osm
    };

    var overlayer = {
        'mark': marker,
    }

    L.control.layers(baseMaps,overlayer).addTo(map);

    // option one
    function onMapClick(e) {
        var coords = document.querySelector("[name=kord]")
        var lat = e.latlng.lat
        var lng = e.latlng.lng

        if (!marker) {
            marker = L.marker(e.latlng).addTo(map)
        } else {
            marker.setLatLng(e.latlng)
        }

        coords.value = lat + "," + lng
    }
    map.on('click', onMapClick)

    //optiontwo
    // marker.on('dragend',function(){
    //     var kord = marker.getLatLng();
    //     marker.setLatLng(kord,{
    //         draggable:true
    //     });
    //     $('#kordinat').val(kord.lat + "," + kord.lng).keyup();
    //     $('#longt').val(kord.lng).keyup();
    //     $('#lat').val(kord.lat).keyup();
    // });
</script>

<script>
    $(document).ready(function(){
        $('#PD').on('change', function(){
            var pd = $(this).val();
            // console.log(pd);
            if (pd) {
                $.ajax({
                    url: '/pd/' + pd,
                    type: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data){
                        // console.log(data);
                        if (data) {
                            $('#komunitas').empty();
                            $('#komunitas').append('<option value="">--pilih--</option>');
                            $.each(data,function(key, kom){
                                $('select[name="nama_komunitas"]').append(
                                    '<option value="' + kom.komunitas + '">' +
                                        kom.komunitas + '</option>'
                                );

                            });
                        } 
                        else {
                            $('#komunitas').empty();
                        }
                    }
                });
            } 
            else {
                $('#PD').empty();
            }
        });
    });
</script>

@endsection
