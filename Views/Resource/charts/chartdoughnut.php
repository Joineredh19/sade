<!DOCTYPE html>
<html>
<!-- ****************************************************************************** -->
<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
</head>
<!-- ****************************************************************************** -->
<!------------------------------- INICIO GRAFICA DONA -------------------------------->
<div>
  <canvas id="cChart" width="200" height="80"></canvas>
</div>
<script>
  const piechart = document.getElementById('cChart').getContext('2d');
  const cChart = new Chart(piechart, {
    type: 'doughnut',
    data: {
      labels: ['TOTAL DE FALTAS ATENDIDAS', 'TOTAL DE FALTAS SIN ATENDER'],
      datasets: [{
        label: 'TOTAL DE FALTAS',
        data: [108, 78],
        backgroundColor: ['rgba(27, 157, 51)', 'rgba(207,4,41)'],
        borderColor: ['rgb(21, 122, 39)', 'rgba(180, 4, 33)']
      }],
      hoverOffset: 4
    },
  });
</script>
<!--------------------------------- FIN GRAFICA DONA --------------------------------->

</html>