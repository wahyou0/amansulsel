@extends('admin.dashboard')
@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h5 class="">Charts Luas Wilayah Adat AMAN Majene</h5>
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
                <li class="breadcrumb-item active" aria-current="page">Jumlah laki-laki dan Perempuan tiap Komunitas AMAN Majene</li>
                <br><br>
            </ol>
        </nav>
    </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12- layout-spacing">
            <div class="widget widget-chart-one">
                    <h6 class="">AMAN Majene</h6>

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
            <h6 class=""> Adolang</h6>
            @foreach ($total_adolang as $item)
            <small><p>Total = {{ number_format($item) }} Jiwa</p></small>
            @endforeach

            <div class="">
                <canvas id="myChartAdolang"></canvas>
            </div>
        </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <h6 class=""> Banggae</h6>
                @foreach ($total_banggae as $item)
                <p>Total = {{ number_format($item) }}</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartBanggae"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <h6 class=""> Buttu Bagasa Tande</h6>
    
                @foreach ($total_buttu_bagasa as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartButtuBagasa"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Lambe Allu</h6>
                @foreach ($total_lambe_allu as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartLambeAllu"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Limboro Rambu-Rambu</h6>
                @foreach ($total_limboro_rambu as $item)
                    <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartLimboroRambu"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Mekkatta/Lombong Mekkatta</h6>
                @foreach ($total_mekkatta as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartMekkatta"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Pamboang</h6>
                @foreach ($total_pamboang as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPamboang"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Paminggalan</h6>
                @foreach ($total_paminggalan as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPaminggalan"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Panggalo</h6>
                @foreach ($total_panggalo as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPanggalo"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Popenga</h6>
                @foreach ($total_popenga as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPopenga"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Poralle Salabose</h6>
                @foreach ($total_poralle_salabose as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPoralleSalabose"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Puttada</h6>
                @foreach ($total_puttada as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartPuttada"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Sambaho</h6>
                @foreach ($total_sambaho as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSambaho"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Sendana</h6>
                @foreach ($total_sendana as $item)
                    <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSendana"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Tandu Masadi Salutahongan</h6>
                @foreach ($total_tandu_masadi as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTanduMasadi"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Tubo</h6>
                @foreach ($total_tubo as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTubo"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Tuho Lombang</h6>
                @foreach ($total_tuho_lombang as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTuhoLombang"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h6 class=""> Ulumanda</h6>
                @foreach ($total_ulumanda as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartUlumanda"></canvas>
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
        const ctx = document.getElementById('myChartAdolang');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jumlah',
                    data: [@json($laki_adolang), @json($perempuan_adolang)],
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
        const bp = document.getElementById('myChartBanggae');

        new Chart(bp, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jumlah',
                    data: [@json($laki_banggae), @json($perempuan_banggae)],
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
        const pa = document.getElementById('myChartButtuBagasa');

        new Chart(pa, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_buttu_bagasa), @json($perempuan_buttu_bagasa)],
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
        const ta = document.getElementById('myChartLambeAllu');

        new Chart(ta, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_lambe_allu), @json($perempuan_lambe_allu)],
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
        const kal = document.getElementById('myChartLimboroRambu');

        new Chart(kal, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_limboro_rambu), @json($perempuan_limboro_rambu)],
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
        const bar = document.getElementById('myChartMekkatta');

        new Chart(bar, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_mekkatta), @json($perempuan_mekkatta)],
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
        const pan = document.getElementById('myChartPamboang');

        new Chart(pan, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_pamboang), @json($perempuan_pamboang)],
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
        const mar = document.getElementById('myChartPaminggalan');

        new Chart(mar, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_paminggalan), @json($perempuan_paminggalan)],
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
        const tek = document.getElementById('myChartPanggalo');

        new Chart(tek, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_panggalo), @json($perempuan_panggalo)],
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
        const pop = document.getElementById('myChartPopenga');

        new Chart(pop, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_popenga), @json($perempuan_popenga)],
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
        const pora = document.getElementById('myChartPoralleSalabose');

        new Chart(pora, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_poralle_salabose), @json($perempuan_poralle_salabose)],
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
        const puttada = document.getElementById('myChartPuttada');

        new Chart(puttada, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_puttada), @json($perempuan_puttada)],
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
        const sambaho = document.getElementById('myChartSambaho');

        new Chart(sambaho, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_sambaho), @json($perempuan_sambaho)],
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
        const sendana = document.getElementById('myChartSendana');

        new Chart(sendana, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_sendana), @json($perempuan_sendana)],
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
        const tandu = document.getElementById('myChartTanduMasadi');

        new Chart(tandu, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_tandu_masadi), @json($perempuan_tandu_masadi)],
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
        const tubo = document.getElementById('myChartTubo');

        new Chart(tubo, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_tubo), @json($perempuan_tubo)],
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
        const tuho = document.getElementById('myChartTuhoLombang');

        new Chart(tuho, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_tuho_lombang), @json($perempuan_tuho_lombang)],
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
        const ulumanda = document.getElementById('myChartUlumanda');

        new Chart(ulumanda, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_ulumanda), @json($perempuan_ulumanda)],
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
  