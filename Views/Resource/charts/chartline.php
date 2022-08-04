<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    </head>
<!--INICIO TABLA SEMESTRAL -->
<div>
<?php
include '../../Asistencia/GraficaInasistencia.php'; 
?>
                  <canvas id="myChart" width="400" height="187"></canvas>
                </div>
                <script>
                  const linechart = document.getElementById('myChart').getContext('2d');
                  const myChart = new Chart(linechart, {
                        type: 'line',
                        data: {
                              labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                              datasets: [{
                                          label: 'FALTAS ATENDIDAS',
                                          data: [<?php echo $EneroAten.', '.$FebreroAten.', '.$MarzoAten.', '.$AbrilAten.', '.$MayoAten.', '.$JunioAten.', '.$JulioAten.', '.$AgostoAten.', '.$SeptAten.', '.$OctAten.', '.$NovAten.', '.$DicAten?>],
                                          backgroundColor: ['rgba(27, 157, 51)',],
                                          borderColor:'rgb(27, 157, 51)',
                                        },
                                        {
                                          label: 'FALTAS SIN ATENDER',
                                          data: [<?php echo $EneroIna.', '.$FebreroIna.', '.$MarzoIna.', '.$AbrilIna.', '.$MayoIna.', '.$JunioIna.', '.$JulioIna.', '.$AgostoIna.', '.$SeptIna.', '.$OctIna.', '.$NovIna.', '.$DicIna?>],
                                          backgroundColor: ['rgba(207, 4, 41)',],
                                          borderColor:'rgb(204,4,41)',
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
<!--FIN TABLA SEMESTRAL -->
</html>