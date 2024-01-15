@extends('admin.dashboard')
@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h5 class="">Charts Luas Wilayah Adat AMAN Mamasa</h5>
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
                <li class="breadcrumb-item active" aria-current="page">Jumlah laki-laki dan Perempuan tiap Komunitas AMAN Mamasa</li>
                <br><br>
            </ol>
        </nav>
    </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12- layout-spacing">
            <div class="widget widget-chart-one">
                    <h6 class="">AMAN Mamasa</h6>

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
            <h6 class=""> Aralle</h6>
            @foreach ($total_aralle as $item)
            <small><p>Total = {{ number_format($item) }} Jiwa</p></small>
            @endforeach

            <div class="">
                <canvas id="myChartAralle"></canvas>
            </div>
        </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <h6 class=""> Balla Mesalu</h6>
                @foreach ($total_balla_messalu as $item)
                <p>Total = {{ number_format($item) }}</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBallaMesalu"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <h6 class=""> Balla Satanetean</h6>
    
                @foreach ($total_balla_satanetean as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBallaSatanetean"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Balla Tumuka</h6>
                @foreach ($total_balla_tumuka as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBallaTumuka"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Bambang</h6>
                @foreach ($total_bambang as $item)
                    <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBambang"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Lembangna Salulo</h6>
                @foreach ($total_lembangna as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartLembangnaSalulo"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Makuang</h6>
                @foreach ($total_makuang as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMakuang"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Rantebulahan</h6>
                @foreach ($total_rantebulahan as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartRantebulahan"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Mala'bo</h6>
                @foreach ($total_malabo as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMalabo"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Mambi</h6>
                @foreach ($total_mambi as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMambi"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Messawa</h6>
                @foreach ($total_messawa as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMessawa"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Nosu</h6>
                @foreach ($total_nosu as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartNosu"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Saloan</h6>
                @foreach ($total_saloan as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSaloan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Orobua</h6>
                @foreach ($total_orobua as $item)
                    <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartOrobua"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Osango</h6>
                @foreach ($total_osango as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartOsango"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Pana'</h6>
                @foreach ($total_pana as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPana"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Ralle Anaq</h6>
                @foreach ($total_ralle_anaq as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartRalleAnaq"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Rambusaratu</h6>
                @foreach ($total_rambusaratu as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartRambusaratu"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Sapan</h6>
                @foreach ($total_sapan as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSapan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Sepang</h6>
                @foreach ($total_sepang as $item)
                    <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSepang"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Tabang</h6>
                @foreach ($total_tabang as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTabang"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Tabulahan</h6>
                @foreach ($total_tabulahan as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTabulahan"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Tawalian</h6>
                @foreach ($total_tawalian as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTawalian"></canvas>
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
        const ctx = document.getElementById('myChartAralle');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jumlah',
                    data: [@json($laki_aralle), @json($perempuan_aralle)],
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
        const bp = document.getElementById('myChartBallaMesalu');

        new Chart(bp, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jumlah',
                    data: [@json($laki_balla_messalu), @json($perempuan_balla_messalu)],
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
        const pa = document.getElementById('myChartBallaSatanetean');

        new Chart(pa, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_balla_satanetean), @json($perempuan_balla_satanetean)],
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
        const ta = document.getElementById('myChartBallaTumuka');

        new Chart(ta, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_balla_tumuka), @json($perempuan_balla_tumuka)],
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
        const kal = document.getElementById('myChartBambang');

        new Chart(kal, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_bambang), @json($perempuan_bambang)],
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
        const bar = document.getElementById('myChartLembangnaSalulo');

        new Chart(bar, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_lembangna), @json($perempuan_lembangna)],
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
        const pan = document.getElementById('myChartMakuang');

        new Chart(pan, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_makuang), @json($perempuan_makuang)],
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
        const mar = document.getElementById('myChartRantebulahan');

        new Chart(mar, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_rantebulahan), @json($perempuan_rantebulahan)],
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
        const tek = document.getElementById('myChartMalabo');

        new Chart(tek, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_malabo), @json($perempuan_malabo)],
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
        const pop = document.getElementById('myChartMambi');

        new Chart(pop, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_mambi), @json($perempuan_mambi)],
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
        const pora = document.getElementById('myChartMessawa');

        new Chart(pora, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_messawa), @json($perempuan_messawa)],
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
        const Nosu = document.getElementById('myChartNosu');

        new Chart(Nosu, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_nosu), @json($perempuan_nosu)],
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
        const Saloan = document.getElementById('myChartSaloan');

        new Chart(Saloan, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_saloan), @json($perempuan_saloan)],
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
        const Orobua = document.getElementById('myChartOrobua');

        new Chart(Orobua, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_orobua), @json($perempuan_orobua)],
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
        const tandu = document.getElementById('myChartOsango');

        new Chart(tandu, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_osango), @json($perempuan_osango)],
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
        const Pana = document.getElementById('myChartPana');

        new Chart(Pana, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_pana), @json($perempuan_pana)],
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
        const tuho = document.getElementById('myChartRalleAnaq');

        new Chart(tuho, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_ralle_anaq), @json($perempuan_ralle_anaq)],
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
        const Rambusaratu = document.getElementById('myChartRambusaratu');

        new Chart(Rambusaratu, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_rambusaratu), @json($perempuan_rambusaratu)],
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
    const Sapan = document.getElementById('myChartSapan');

    new Chart(Sapan, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_sapan), @json($perempuan_sapan)],
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
    const Sepang = document.getElementById('myChartSepang');

    new Chart(Sepang, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_sepang), @json($perempuan_sepang)],
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
    const Tabang = document.getElementById('myChartTabang');

    new Chart(Tabang, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_tabang), @json($perempuan_tabang)],
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
    const tabulahan = document.getElementById('myChartTabulahan');

    new Chart(tabulahan, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_tabulahan), @json($perempuan_tabulahan)],
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
    const Tawalian = document.getElementById('myChartTawalian');

    new Chart(Tawalian, {
        type: 'pie',
        data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            label: 'Jumlah',
            data: [@json($laki_tawalian), @json($perempuan_tawalian)],
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
  