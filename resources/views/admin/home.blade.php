@extends('admin.dashboard')
@section('content')

    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Charts Luas Wilayah Adat Tiap Komunitas</h5>
            </div>

            <div class="widget-content">
                <div id="chart"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 layout-spacing">
        <div class="widget widget-chart-one">

              <h6 class="">Jumlah Laki-Laki dan Perempuan</h6>

            @foreach ($laki as $item)
            <p>Laki-laki : {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita as $item)
            <p>Perempuan : {{ $item }}</p>
            @endforeach

            @foreach ($total as $item)
            <p>Total : {{ $item }} Orang</p>
            @endforeach

            <div class="">
              <canvas id="myChartWilayah"></canvas>
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
          height: 350
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
      const wil = document.getElementById('myChartWilayah');

      new Chart(wil, {
        type: 'pie',
        data: {
          labels: ['Laki-laki', 'Perempuan'],
          datasets: [{
            label: 'Jumlah',
            data: [@json($laki), @json($wanita)],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
              x: {
              max: 100
            },
            y: {
              max: 100
            }
          }
        }
      });
    </script>



@endsection