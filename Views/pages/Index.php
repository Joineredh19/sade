<?php include '../includes/header.php';

require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();


?>
 <link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/UDG- VectorR.png">
 <link rel="icon" type="image/png" href="../Resource/img/UDG- VectorR.png">
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="http://www.cuc.udg.mx/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../Resource/img/UDG - Vector Blanco.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="http://www.cuc.udg.mx/" class="simple-text logo-normal">
        SADE
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
      <?php 
      include '../includes/sidebar.php';
      ?>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Tablero</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Buscar...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
      <?php 
      include '../includes/navbar.php';
      ?>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="bi bi-journal-text"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Faltas</p>
                      <p class="card-title">50<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
         
                   <i class="fa fa-calendar-o"></i>
                  Faltas diarias
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6" style="padding-left: 0px; padding-right: 15px;">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="bi bi-journal-check text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Faltas atendidas</p>
                      <p class="card-title">30<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-check-square"></i>
                  Faltas diarias atendidas
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6" style="padding-left: 0px; padding-right: 2px;">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="bi bi-journal-x text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Faltas sin atender</p>
                      <p class="card-title">20<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-minus-square"></i>
                  Faltas diarias sin atender
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="bi bi-journals text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Faltas totales</p>
                      <p class="card-title">500<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-bar-chart"></i>
                  Faltas totales del curso
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">FALTAS DIARIAS</h5>
                <p class="card-category">Universidad de Guadalajara</p>
              </div>
              <div class="card-body ">

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

              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-bar-chart"></i> Centro Unversitario de la Costa
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">FALTAS SEMESTRALES</h5>
                <p class="card-category">Universidad de Guadalajara</p>
              </div>
              <div class="card-body ">

                <!-- INICIO GRAFICA DONA -->
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
                                          data: [108,78],
                                          backgroundColor: ['rgba(27, 157, 51)', 'rgba(207,4,41)'],
                                          borderColor:['rgb(21, 122, 39)', 'rgba(180, 4, 33)']
                                        }],hoverOffset: 4
                            },
                    }
                  );
                </script>
<!-- FIN GRAFICA DONA -->

              </div>
              <div class="card-footer ">

                <hr>
                <div class="stats">
                  <i class="fa fa-pie-chart" aria-hidden="true"></i> Centro Unversitario de la Costa
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">FALTAS SEMESTRALES</h5>
                <p class="card-category">Universidad de Guadalajara</p>
              </div>
              <div class="card-body">

<!--INICIO TABLA SEMESTRAL -->
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
                                          backgroundColor: ['rgba(27, 157, 51)',],
                                          borderColor:'rgb(27, 157, 51)',
                                        },
                                        {
                                          label: 'FALTAS SIN ATENDER',
                                          data: [10, 18, 15, 8, 13, 14],
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

              </div>
              <div class="card-footer">
                <!--************ APARTADO POR SI SE OCUPA**************
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Faltas Atendidas
                  <i class="fa fa-circle text-warning"></i> Faltas No Atendidas
                </div>
                -->
                <hr />
                <div class="card-stats">
                  <i class="fa fa-area-chart" aria-hidden="true"></i> Centro Unversitario de la Costa
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Button trigger modal -->



<!-- Modal2 -->


      <?php include '../includes/footer.php';?>

