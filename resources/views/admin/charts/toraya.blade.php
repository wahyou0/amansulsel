@extends('admin.dashboard')
@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h5 class="">Charts Luas Wilayah Adat AMAN Toraya</h5>
            </div>

            <div class="widget-content">
                <div id="chart"></div>
            </div>
        </div>
    </div>

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Charts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jumlah laki-laki dan Perempuan tiap Komunitas AMAN Toraya</li>
                <br><br>
            </ol>
        </nav>
    </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12- layout-spacing">
            <div class="widget widget-chart-one">
                    <h6 class="">AMAN Toraya</h6>

                @foreach ($total as $item)
                <small><p>Total = {{ number_format($item) }} Jiwa</p></small>
                
                @endforeach

                <div class="">
                <canvas id="myChartMajene"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <h6 class=""> Balepe'</h6>
            @foreach ($total_balepe as $item)
            <small><p>Total = {{ number_format($item) }} Jiwa</p></small>
            @endforeach

            <div class="">
                <canvas id="myChartBalepe"></canvas>
            </div>
        </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <h6 class=""> Balla </h6>
                @foreach ($total_balla as $item)
                <p>Total = {{ number_format($item) }}</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBalla"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <h6 class="">Banga</h6>
    
                @foreach ($total_banga as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBanga"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Bau</h6>
                @foreach ($total_bau as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBau"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Bittuang</h6>
                @foreach ($total_bittuang as $item)
                    <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBittuang"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class="">Buakayu</h6>
                @foreach ($total_buakayu as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBuakayu"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Kurra</h6>
                @foreach ($total_kurra as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartKurra"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Madandan</h6>
                @foreach ($total_madandan as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMadandan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Makale</h6>
                @foreach ($total_makale as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMakale"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Malimbong</h6>
                @foreach ($total_malimbong as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMalimbong"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Mappa' </h6>
                @foreach ($total_mappa as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMappa"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Mengkendek</h6>
                @foreach ($total_mengkendek as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMengkendek"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Palesan</h6>
                @foreach ($total_palesan as $item)
                    <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPalesan"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Pali</h6>
                @foreach ($total_pali as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPali"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Rano</h6>
                @foreach ($total_rano as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartRano"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Sangalla'</h6>
                @foreach ($total_sangalla as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSangalla"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Se'seng</h6>
                @foreach ($total_seseng as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSeseng"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Simbuang</h6>
                @foreach ($total_simbuang as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSimbuang"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Talion</h6>
                @foreach ($total_talion as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTalion"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Tapparan</h6>
                @foreach ($total_tapparan as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTapparan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Ulusalu</h6>
                @foreach ($total_ulusalu as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartUlusalu"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Balusu</h6>
                @foreach ($total_balusu as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBalusu"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Buntao</h6>
                @foreach ($total_buntao as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBuntao"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Dende'</h6>
                @foreach ($total_dende as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartDende"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Kesu'</h6>
                @foreach ($total_kesu as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartKesu"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Nanggala</h6>
                @foreach ($total_nanggala as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartNanggala"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Pangala'</h6>
                @foreach ($total_pangala as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPangala"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Piongan</h6>
                @foreach ($total_piongan as $item)
                    <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPiongan"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Rantebua</h6>
                @foreach ($total_rantebua as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartRantebua"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Sa'dan</h6>
                @foreach ($total_sadan as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSadan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Tikala</h6>
                @foreach ($total_tikala as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTikala"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Tondon</h6>
                @foreach ($total_tondon as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTondon"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        var options = {
          series: [{
          name: 'Luas wilayah Indikatif',
          data: @json($indikatif)
        }, {
          name: 'Luas wilayah Pemetaasn',
          data: @json($peta)
        }],
          chart: {
          type: 'bar',
          height: 300
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '100%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: @json($kom),
        },
        yaxis: {
          title: {
            text: 'Hektare'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " ha"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ma = document.getElementById('myChartMajene');

        new Chart(ma, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'laki-laki',
                    data: [@json($laki), @json($perempuan)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {
                scales: {
                    // y: {
                    //   beginAtZero: true
                    // }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>


    <script>
        const ctx = document.getElementById('myChartBalepe');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jumlah',
                    data: [@json($laki_balepe), @json($perempuan_balepe)],
                    borderWidth: 2,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {
                scales: {
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const bp = document.getElementById('myChartBalla');

        new Chart(bp, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jumlah',
                    data: [@json($laki_balla), @json($perempuan_balla)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {
                scales: {
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const pa = document.getElementById('myChartBanga');

        new Chart(pa, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_banga), @json($perempuan_banga)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const ta = document.getElementById('myChartBau');

        new Chart(ta, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_bau), @json($perempuan_bau)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const kal = document.getElementById('myChartBittuang');

        new Chart(kal, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_bittuang), @json($perempuan_bittuang)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const bar = document.getElementById('myChartBuakayu');

        new Chart(bar, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_buakayu), @json($perempuan_buakayu)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const pan = document.getElementById('myChartKurra');

        new Chart(pan, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_kurra), @json($perempuan_kurra)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const tek = document.getElementById('myChartMadandan');

        new Chart(tek, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_madandan), @json($perempuan_madandan)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
    <script>
        const pop = document.getElementById('myChartMakale');

        new Chart(pop, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_makale), @json($perempuan_makale)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const pora = document.getElementById('myChartMalimbong');

        new Chart(pora, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_malimbong), @json($perempuan_malimbong)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const Mappa = document.getElementById('myChartMappa');

        new Chart(Mappa, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_mappa), @json($perempuan_mappa)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
    
    <script>
        const Mengkendek = document.getElementById('myChartMengkendek');

        new Chart(Mengkendek, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_mengkendek), @json($perempuan_mengkendek)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const Palesan = document.getElementById('myChartPalesan');

        new Chart(Palesan, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_palesan), @json($perempuan_palesan)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const tandu = document.getElementById('myChartPali');

        new Chart(tandu, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_pali), @json($perempuan_pali)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const Rano = document.getElementById('myChartRano');

        new Chart(Rano, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_rano), @json($perempuan_rano)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const tuho = document.getElementById('myChartSangalla');

        new Chart(tuho, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_sangalla), @json($perempuan_sangalla)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const Seseng = document.getElementById('myChartSeseng');

        new Chart(Seseng, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_seseng), @json($perempuan_seseng)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

<script>
    const Simbuang = document.getElementById('myChartSimbuang');

    new Chart(Simbuang, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_simbuang), @json($perempuan_simbuang)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

<script>
    const sindaga = document.getElementById('myChartTalion');

    new Chart(sindaga, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_talion), @json($perempuan_talion)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

<script>
    const Tapparan = document.getElementById('myChartTapparan');

    new Chart(Tapparan, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_tapparan), @json($perempuan_tapparan)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

<script>
    const Ulusalu = document.getElementById('myChartUlusalu');

    new Chart(Ulusalu, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_ulusalu), @json($perempuan_ulusalu)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

<script>
    const Balusu = document.getElementById('myChartBalusu');

    new Chart(Balusu, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_balusu), @json($perempuan_balusu)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

    
    <script>
        const Buntao = document.getElementById('myChartBuntao');

        new Chart(Buntao, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_buntao), @json($perempuan_buntao)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const Dende = document.getElementById('myChartDende');

        new Chart(Dende, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_dende), @json($perempuan_dende)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const Kesu = document.getElementById('myChartKesu');

        new Chart(Kesu, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_kesu), @json($perempuan_kesu)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const Nanggala = document.getElementById('myChartNanggala');

        new Chart(Nanggala, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_nanggala), @json($perempuan_nanggala)],
                borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
            }]
            },
            options: {
            scales: {
            },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

<script>
    const Pangala = document.getElementById('myChartPangala');

    new Chart(Pangala, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_pangala), @json($perempuan_pangala)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

<script>
    const Piongan = document.getElementById('myChartPiongan');

    new Chart(Piongan, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_piongan), @json($perempuan_piongan)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

<script>
    const Rantebua = document.getElementById('myChartRantebua');

    new Chart(Rantebua, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_rantebua), @json($perempuan_rantebua)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

<script>
    const Sadan = document.getElementById('myChartSadan');

    new Chart(Sadan, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_sadan), @json($perempuan_sadan)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

<script>
    const Tikala = document.getElementById('myChartTikala');

    new Chart(Tikala, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_tikala), @json($perempuan_tikala)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

<script>
    const Tondon = document.getElementById('myChartTondon');

    new Chart(Tondon, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_tondon), @json($perempuan_tondon)],
            borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
        }]
        },
        options: {
        scales: {
        },
                plugins: {
                    legend: {
                        display: false
                    }
                }
        }
    });
</script>

@endsection
  