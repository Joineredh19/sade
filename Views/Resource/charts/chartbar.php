<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    </head>
<!-- INICIO TABLA SEMANAL -->
<div>
<?php
include '../../Asistencia/GraficaInasistencia.php'; 
$DIASSEMANA = array('LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES');
$dias = json_encode($DIASSEMANA);
?>
                  <canvas id="yChart" width="200" height="80"></canvas>
                </div>
                <script>
                  const ctx = document.getElementById('yChart').getContext('2d');
                  const yChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                              labels: <?php echo $dias;?>,
                              datasets: [{
                                          label: 'FALTAS ATENDIDAS',
                                          data: [<?php echo $LunesAten.', '.$MartesAten.', '.$MiercolesAten.', '.$JuevesAten.', '.$ViernesAten?>],
                                          backgroundColor: ['rgba(27, 157, 51)',],
                                          borderColor:'rgb(27, 157, 51)',
                                        },
                                        {
                                          label: 'FALTAS SIN ATENDER',
                                          data: [<?php echo $LunesIna.', '.$MartesIna.', '.$MiercolesIna.', '.$JuevesIna.', '.$ViernesIna?>],
                                          backgroundColor: ['rgba(207,4,41)',],
                                          borderColor:'rgb(207,4,41)',
                                        }]
                             },
                    options:{
                              scales: {
                                          y:{
                                            beginAtZero: true
                                        }
                        }
                      }
                    });
                </script>
<!--FIN TABLA SEMANAL-->
</html>