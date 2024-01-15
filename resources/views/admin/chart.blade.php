<div>
    <canvas id="myChart"></canvas>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: '# of Votes',
          data: [@json($lakiorong), @json($wanitaorong)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
  