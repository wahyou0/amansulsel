@extends('admin.dashboard')
@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                
                <h5 class="">Charts Luas Wilayah Adat AMAN Sidrap</h5>
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
                <li class="breadcrumb-item active" aria-current="page">Jumlah laki-laki dan Perempuan tiap Komunitas AMAN Sidrap</li>
                <br><br>
            </ol>
        </nav>
    </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12- layout-spacing">
            <div class="widget widget-chart-one">
                    <h6 class="">AMAN Sidrap</h6>

                @foreach ($total as $item)
                <small><p>Total = {{ number_format($item) }} Jiwa</p></small>
                
                @endforeach

                <div class="">
                <canvas id="myChartGowa"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
                <h6 class="">Cenreangin</h6>
            @foreach ($total_cenreangin as $item)
            <small><p>Total = {{ number_format($item) }} Jiwa</p></small>
            @endforeach

            <div class="">
                <canvas id="myChartCenreangin"></canvas>
            </div>
        </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <h6 class=""> Sando batu</h6>
                @foreach ($total_sando_batu as $item)
                <p>Total = {{ number_format($item) }}</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartSandoBatu"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <h6 class="">Tolotang</h6>
    
                @foreach ($total_tolotang as $item)
                <p>Total = {{ number_format($item) }} Jiwa</p>
                @endforeach
    
                <div class="">
                <canvas id="myChartTolotang"></canvas>
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
        const ma = document.getElementById('myChartGowa');

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
        const ctx = document.getElementById('myChartCenreangin');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jumlah',
                    data: [@json($laki_cenreangin), @json($perempuan_cenreangin)],
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
        const bp = document.getElementById('myChartSandoBatu');

        new Chart(bp, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'Jumlah',
                    data: [@json($laki_sando_batu), @json($perempuan_sando_batu)],
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
        const pa = document.getElementById('myChartTolotang');

        new Chart(pa, {
            type: 'pie',
            data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [@json($laki_tolotang), @json($perempuan_tolotang)],
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
  