@extends('admin.dashboard')
@section('content')

  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
      <div class="widget widget-chart-one">
            
        <h5 class="">Charts Luas Wilayah Adat Tiap  di AMAN Massenrempulu</h5>
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
              <li class="breadcrumb-item active" aria-current="page">Jumlah laki-laki dan Perempuan tiap Komunitas di AMAN Massenrempulu</li>
              <br><br>
          </ol>
      </nav>
    </div>

    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12- layout-spacing">
        <div class="widget widget-chart-one">
              <h6 class="">AMAN Massenrempulu</h6>

            @foreach ($total as $item)
            <small><p>Total = {{ number_format($item) }} Jiwa</p></small>
            
            @endforeach

            <div class="">
              <canvas id="myChartMaspul"></canvas>
            </div>
        </div>
    </div>
  
  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
      <div class="widget widget-chart-one">
              <h6 class=""> Orong</h6>
          @foreach ($totalorong as $item)
          <small><p>Total = {{ number_format($item) }} Jiwa</p></small>
          @endforeach

          <div class="">
            <canvas id="myChartOrong"></canvas>
          </div>
      </div>
    </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
              <h6 class=""> Bambapuang</h6>
  
            @foreach ($total_bambapuang as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartBambapuang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
                <h6 class=""> Patongloan</h6>
  
            @foreach ($total_patongloan as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartPatongloan"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Tangsa</h6>
  
            @foreach ($total_tangsa as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartTangsa"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Kalupini</h6>
  
            @foreach ($total_kalupini as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartkalupini"></canvas>
            </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Baroko</h6>
  
            @foreach ($total_baroko as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartbaroko"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Pana</h6>
  
            @foreach ($total_pana as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartpana"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Marena</h6>
  
            @foreach ($total_marena as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartmarena"></canvas>
            </div>
        </div>
      </div>
      
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Mundan</h6>
  
            @foreach ($total_mundan as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartmundan"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
            <h6 class=""> Uru</h6>
            @foreach ($total_uru as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myCharturu"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Batu Noni</h6>
  
            @foreach ($total_batu_noni as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartbatunoni"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Anggebuntu</h6>
  
            @foreach ($total_angge_batu as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartanggebatu"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Buntu Pema</h6>
  
            @foreach ($total_buntu_pema as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartbuntupema"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Ranga</h6>
  
            @foreach ($total_ranga as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartranga"></canvas>
            </div>
        </div>
      </div>
      
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Tallubamba</h6>
  
            @foreach ($total_tallu_bamba as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myCharttallubamba"></canvas>
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
              <canvas id="myCharttondon"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Limbuang</h6>
  
            @foreach ($total_limbuang as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartlimbuang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Pasang</h6>
  
            @foreach ($total_pasang as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartpasang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Baringin</h6>
  
            @foreach ($total_baringin as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartbaringin"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Tapong</h6>
  
            @foreach ($total_tapong as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myCharttapong"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Matajang</h6>
  
            @foreach ($total_matajang as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartmatajang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Andulang</h6>
  
            @foreach ($total_andulang as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartandulang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
            <h6 class=""> Malino</h6>
            @foreach ($total_malino as $item)
            <p>Total = {{ number_format($item) }} Jiwa</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartmalino"></canvas>
            </div>
        </div>
      </div>

    </div>



    <script>
        var options = {
          series: [{
          name: 'Luas wilayah Indikatif',
          data: @json($luas)
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
    const ma = document.getElementById('myChartMaspul');
  
    new Chart(ma, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'laki-laki',
          data: [@json($laki), @json($wanita)],
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
    const ctx = document.getElementById('myChartOrong');
  
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($lakiorong), @json($wanitaorong)],
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
    const bp = document.getElementById('myChartBambapuang');

    new Chart(bp, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_bambapuang), @json($wanita_bambapuang)],
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
    const pa = document.getElementById('myChartPatongloan');

    new Chart(pa, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_patongloan), @json($wanita_patongloan)],
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
    const ta = document.getElementById('myChartTangsa');

    new Chart(ta, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_tangsa), @json($wanita_tangsa)],
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
    const kal = document.getElementById('myChartkalupini');

    new Chart(kal, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_kalupini), @json($wanita_kalupini)],
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
    const bar = document.getElementById('myChartbaroko');

    new Chart(bar, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_baroko), @json($wanita_baroko)],
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
    const pan = document.getElementById('myChartpana');

    new Chart(pan, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_pana), @json($wanita_pana)],
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
    const mar = document.getElementById('myChartmarena');

    new Chart(mar, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_marena), @json($wanita_marena)],
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
    const munda = document.getElementById('myChartmundan');

    new Chart(munda, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_mundan), @json($wanita_mundan)],
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
    const uru = document.getElementById('myCharturu');

    new Chart(uru, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_uru), @json($wanita_uru)],
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
    const batunoni = document.getElementById('myChartbatunoni');

    new Chart(batunoni, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_batu_noni), @json($wanita_batu_noni)],
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
    const angge = document.getElementById('myChartanggebatu');

    new Chart(angge, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_angge_batu), @json($wanita_angge_batu)],
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
    const pema = document.getElementById('myChartbuntupema');

    new Chart(pema, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_buntu_pema), @json($wanita_buntu_pema)],
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
    const ranga = document.getElementById('myChartranga');

    new Chart(ranga, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_ranga), @json($wanita_ranga)],
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
    const bamba = document.getElementById('myCharttallubamba');

    new Chart(bamba, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_tallu_bamba), @json($wanita_tallu_bamba)],
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
    const tond = document.getElementById('myCharttondon');

    new Chart(tond, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_tondon), @json($wanita_tondon)],
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
    const limb = document.getElementById('myChartlimbuang');

    new Chart(limb, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_limbuang), @json($wanita_limbuang)],
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
    const pasa = document.getElementById('myChartpasang');

    new Chart(pasa, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_pasang), @json($wanita_pasang)],
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
    const bari = document.getElementById('myChartbaringin');

    new Chart(bari, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_baringin), @json($wanita_baringin)],
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
    const tapo = document.getElementById('myCharttapong');

    new Chart(tapo, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_tapong), @json($wanita_tapong)],
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
    const mata = document.getElementById('myChartmatajang');

    new Chart(mata, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_matajang), @json($wanita_matajang)],
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
    const andu = document.getElementById('myChartandulang');

    new Chart(andu, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_andulang), @json($wanita_andulang)],
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
    const mali = document.getElementById('myChartmalino');

    new Chart(mali, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_malino), @json($wanita_malino)],
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