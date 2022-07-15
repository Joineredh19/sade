<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    </head>
<!-- INICIO TABLA SEMANAL -->
<div>
                  <canvas id="yChart" width="200" height="80"></canvas>
                </div>
                <script>
                  const ctx = document.getElementById('yChart').getContext('2d');
                  const yChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                              labels: ['LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO','DOMINGO'],
                              datasets: [{
                                          label: 'FALTAS TOTALES',
                                          data: [30, 44, 27, 24, 23,3,4],
                                          backgroundColor: ['rgba(141, 153, 174)',],
                                          borderColor:'rgb(43,45,66)',
                                        },
                                        {
                                          label: 'FALTAS ATENDIDAS',
                                          data: [20, 26, 12, 16, 10,2,3],
                                          backgroundColor: ['rgba(27, 157, 51)',],
                                          borderColor:'rgb(27, 157, 51)',
                                        },
                                        {
                                          label: 'FALTAS SIN ATENDER',
                                          data: [10, 18, 15, 8, 13,1,1],
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