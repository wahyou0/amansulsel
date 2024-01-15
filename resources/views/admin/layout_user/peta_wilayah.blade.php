

@extends('admin.dashboard')
@section('content')
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

{{-- draw leaflet --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" integrity="sha512-gc3xjCmIy673V6MyOAZhIW93xhM9ei1I+gLbmFjUHIjocENRsLX/QUE1htk5q1XV2D/iie/VQ8DXI6Vu8bexvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
        #map { height: 1080px; }
     </style>

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Peta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wilayah Adat</li>
            </ol>
        </nav>
    </div>
    <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="row mb-3">
                <div id="map"></div>
            </div>

        </div>
    </div>

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

{{-- draw leaflet js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js" integrity="sha512-ozq8xQKq6urvuU6jNgkfqAmT7jKN2XumbrX1JiB3TnF7tI48DPI4Gy1GXKD/V3EExgAs1V+pRO7vwtS1LHg0Gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    var container = L.DomUtil.get('map');
    if (container != null) {
        container._leaflet_id = null;
    }
    
//    var map = L.map('map').setView([-3.4631462911833157, 119.72486189225056], 8);
   
   osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
       maxZoom: 20,
       attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
   });
//    def.addTo(osm);

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

   var map = L.map('map',{
    center:[-3.4631462911833157, 119.72486189225056],
    zoom:8,
    layers:[googleHybrid]
   });

   var marker = L.marker([-5.169672875495814,119.45430546998979],{
       draggable:true
   })
   .bindPopup('AMAN SUl-SEL')
   .addTo(map);
   
//    @foreach ( $nama_mark as $item )
//         var mar = L.marker([{{ $item->kordinat }}],{
            
//         })
//         .bindPopup('{{ $item->nama_komunitas }}')
//         .addTo(map);
//    @endforeach

    @foreach ( $nama_mark as $item )
        var mar = L.marker([{{ $item->kordinat }}],{
        })
        .bindPopup(
            "<div class='my-2'><img src='{{ asset('storage/'.$item->image_peta)}}' class='img-fluid' width='700px'></div>" +
            "<div class='my-2'><strong>Nama Komunitas: </strong> <br>{{ $item->nama_komunitas }}</div>" +
            "<div><a href='{{ url('detail-wilayah/'.$item->id) }}' class='btn btn-outline-info'>Detail</a></div>"
        )
        .addTo(map);
   @endforeach

   var Thunderforest_Landscape = L.tileLayer('https://{s}.tile.thunderforest.com/landscape/{z}/{x}/{y}.png?apikey={apikey}', {
        attribution: '&copy; <a href="http://www.thunderforest.com/">Thunderforest</a>, &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        apikey: '<your apikey>',
        maxZoom: 22
    });
    // Thunderforest_Landscape.addTo(map);


    // var popup = L.popup();
    // function onMapClick(e) {
    //     popup
    //         .setLatLng(e.latlng)
    //         .setContent("Kordinat." + e.latlng.toString())
    //         .openOn(map);
    // }
    // map.on('click', onMapClick);



    // FeatureGroup is to store editable layers
    var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            draw: {
                polygon: {
                    shapeOptions: {
                        color: 'red' //polygons being drawn will be red color
                    },
                },
                marker: true,
                circle: false,
                rectangle: false,
                polyline: true,
                circlemarker: false
            },
            edit: {
                featureGroup: drawnItems
            }
    });
     map.addControl(drawControl);

    // create draw geojson option one
    map.on('draw:created', function(event) {
        var layer = event.layer;
        var feature = layer.feature = layer.feature || {};
        feature.type = feature.type || "Feature";
        var props = feature.properties = feature.properties || {};
        drawnItems.addLayer(layer);
        // $("[name=draw]").html(JSON.stringify(drawnItems.toGeoJSON()));

    });

    //create option two
    // map.on('draw:created', function(e) {
    //         var type = e.layerType,
    //             layer = e.layer;
    //         drawnItems.addLayer(layer);
    //         $('#polygon').val(JSON.stringify(layer.toGeoJSON())); 
    //     });


    
    // edit draw geojson
    map.on('draw:edited', function(event) {
        // $("[name=draw]").html(JSON.stringify(drawnItems.toGeoJSON()));
    });

    // delete draw geojson
    map.on('draw:deleted', function(event) {
        // $("[name=draw]").html("");
    });

    

    @foreach ( $draw as $item )
        var poly = @json($item);   
        var randColor = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
        var layer = L.geoJSON(JSON.parse(poly)).addTo(map);
        window.layer.setStyle({fillColor: '#8B008B',
                            "color": randColor,
                            "weight": 3,
                            "opacity": 9}).addTo(map);
        
    @endforeach
    
    
    
    // penyesuaian tampilan draw
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
    };

    L.control.layers(baseMaps,overlayer).addTo(map);

    // optionone
    // function onMapClick(e) {
    //         var coords = document.querySelector("[name=coordinate]")
    //         var lat = e.latlng.lat
    //         var lng = e.latlng.lng

    //         if (!marker) {
    //             marker = L.marker(e.latlng).addTo(map)
    //         } else {
    //             marker.setLatLng(e.latlng)
    //         }

    //         coords.value = lat + "," + lng
    //     }
    //     map.on('click', onMapClick)

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

@endsection
