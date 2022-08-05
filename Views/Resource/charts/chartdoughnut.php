<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    </head>
                <!-- INICIO GRAFICA DONA -->
 <?php
$atendidas = array();
 $sql = "SELECT * FROM tbitacorasalumnosdia WHERE Falta = 2 AND EstatusReg = 1";
$query = $conn->query($sql);
array_push($atendidas, $query->num_rows);

$faltasat = json_encode($atendidas);

$noatendidas = array();
 $sql = "SELECT * FROM tbitacorasalumnosdia WHERE Falta = 0 AND EstatusReg = 1";
$query = $conn->query($sql);
array_push($noatendidas, $query->num_rows);

$faltasnoat = json_encode($noatendidas);
              ?>
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
                                          data: [<?php echo $faltasat; ?>,<?php echo $faltasnoat; ?>],
                                          backgroundColor: ['rgba(27, 157, 51)', 'rgba(207,4,41)'],
                                          borderColor:['rgb(21, 122, 39)', 'rgba(180, 4, 33)']
                                        }],hoverOffset: 4
                            },
                    }
                  );
                </script>
<!-- FIN GRAFICA DONA -->
</html>