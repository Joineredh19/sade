<!DOCTYPE html>
<html>
<!-- ****************************************************************************** -->
<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
</head>
<!-- ****************************************************************************** -->
<!------------------------- INICIO GRAFICA LINEAL SEMESTRAL -------------------------->
<div>
  <canvas id="myChart" width="400" height="187"></canvas>
</div>
<script>
  const linechart = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(linechart, {
    type: 'line',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
      datasets: [{
          label: 'FALTAS ATENDIDAS',
          data: [20, 26, 12, 16, 10, 24],
          backgroundColor: ['rgba(27, 157, 51)', ],
          borderColor: 'rgb(27, 157, 51)',
        },
        {
          label: 'FALTAS SIN ATENDER',
          data: [10, 18, 15, 8, 13, 14],
          backgroundColor: ['rgba(207, 4, 41)', ],
          borderColor: 'rgb(204,4,41)',
        }
      ]
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
<!-------------------------FIN GRAFICA LINEAL SEMESTRAL ------------------------->
</html>