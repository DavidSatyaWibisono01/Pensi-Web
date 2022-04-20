@extends('layout.header')
@section('title','Dashboard')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Selamat Datang Admin</h3>
                  <h6 class="font-weight-normal mb-0">Semua data pengunjung akan terdata disini!</h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  </div>
                 </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="{{ asset('assets/images/people.svg')}}" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 id="online" class="mb-0 font-weight-normal">0</h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Pengunjung</h4>
                        <h6 class="font-weight-normal text-success"><span class="count"></span>Online</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Pengunjung Hari Ini</p>
                      <p class="fs-30 mb-2">{{$pengunjungtoday}}</p>
                      <p>Orang</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Pengunjung</p>
                      <p class="fs-30 mb-2">{{$pengunjungtotal}}</p>
                      <p>Orang</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Jumlah Pengujung</p>
                      <p class="fs-30 mb-2">{{$pengunjungfrom}}</p>
                      <p>Instansi / Sekolah</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Waktu</p>
                      <p class="fs-30 mb-2" id="clock"></p>
                      <p id="tanggalwaktu"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Chart Pengunjung Per Jurusan</h4>
                    <canvas id="JurusanChart"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Chart Pengunjung Per Jurusan In Percent</h4>
                    <canvas id="JurusanPercent"></canvas>
                  </div>
                </div>
              </div>
          </div>
        </div>
        
        @include('layout.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection
@section('script')
<script>
  var data = {
    labels: ["PPLG", "DKV", "TJKT", "PMN", "HTL", "MPLB", "KLN"],
    datasets: [{
      label: 'dilihat',
      data: [
        '{{$trackins->where('pplg', '<>', '', 'and')->count()}}',
        '{{$trackins->where('dkv', '<>', '', 'and')->count()}}',
        '{{$trackins->where('tjkt', '<>', '', 'and')->count()}}',
        '{{$trackins->where('pmn', '<>', '', 'and')->count()}}',
        '{{$trackins->where('hotel', '<>', '', 'and')->count()}}',
        '{{$trackins->where('mplb', '<>', '', 'and')->count()}}',
        '{{$trackins->where('kuliner', '<>', '', 'and')->count()}}'
      ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(83, 159, 34, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(83, 159, 34, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  if ($("#JurusanChart").length) {
    var barChartCanvas = $("#JurusanChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }
  var doughnutPieData = {
    datasets: [{
      data: [
        '{{round(($trackins->where('pplg', '<>', '', 'and')->count()!=0)?($trackins->where('pplg', '<>', '', 'and')->count()/$totalTracking) * 100:0)}}',
        '{{round(($trackins->where('dkv', '<>', '', 'and')->count()!=0)?($trackins->where('dkv', '<>', '', 'and')->count()/$totalTracking) * 100:0)}}',
        '{{round(($trackins->where('tjkt', '<>', '', 'and')->count()!=0)?($trackins->where('tjkt', '<>', '', 'and')->count()/$totalTracking) * 100:0)}}',
        '{{round(($trackins->where('pmn', '<>', '', 'and')->count()!=0)?($trackins->where('pmn', '<>', '', 'and')->count()/$totalTracking) * 100:0)}}',
        '{{round(($trackins->where('hotel', '<>', '', 'and')->count()!=0)?($trackins->where('hotel', '<>', '', 'and')->count()/$totalTracking) * 100:0)}}',
        '{{round(($trackins->where('mplb', '<>', '', 'and')->count()!=0)?($trackins->where('mplb', '<>', '', 'and')->count()/$totalTracking) * 100:0)}}',
        '{{round(($trackins->where('kuliner', '<>', '', 'and')->count()!=0)?($trackins->where('kuliner', '<>', '', 'and')->count()/$totalTracking) * 100:0)}}',
      ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)',
        'rgba(83, 159, 34, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(83, 159, 34, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: ["PPLG", "DKV", "TJKT", "PMN", "HTL", "MPLB", "KLN"],
  };
  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    },
  };
  if ($("#JurusanPercent").length) {
    var doughnutChartCanvas = $("#JurusanPercent").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions,
    });
  }
</script>
@endsection