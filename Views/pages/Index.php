<?php include '../includes/header.php';

require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
if(!session_id()) @session_start();
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
date_default_timezone_set('America/Mexico_City');

 $conn = mysqli_connect("softwarela.com.mx",
 "softwa60_sade22", "Sade2022*", "softwa60_sade22");
 $today = date('Y-m-d');
 $yearactual = date('Y');
?>
 <link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/SLALogo.png">
 <link rel="icon" type="image/png" href="../Resource/img/SLALogo.png">
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="../index.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../Resource/img/SLALogo.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="../index.php" class="simple-text logo-normal">
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
          <div class="col-lg-4 col-md-6 col-sm-6">
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
                      
                      <?php
                $sql = "SELECT * FROM tbitacorasalumnosdia WHERE date (FHoraAsistencia) = '$today' AND Falta = 0 AND EstatusReg = 1";
                $query = $conn->query($sql);

                echo '<p class="card-title">'.$query->num_rows.'<p>'
              ?>
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
          <div class="col-lg-4 col-md-6 col-sm-6" style="padding-left: 0px; padding-right: 15px;">
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
                      <?php
                $sql = "SELECT * FROM tbitacorasalumnosdia WHERE date (FHoraAsistencia) = '$today' AND Falta = 2 AND EstatusReg = 1";
                $query = $conn->query($sql);

                echo '<p class="card-title">'.$query->num_rows.'<p>'
              ?>
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
          <div class="col-lg-4 col-md-6 col-sm-6" style="padding-left: 0px; padding-right: 2px;">
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
                      <?php
                $sql = "SELECT * FROM tbitacorasalumnosdia WHERE Falta = 0 AND EstatusReg = 1";
                $query = $conn->query($sql);

                echo '<p class="card-title">'.$query->num_rows.'<p>'
              ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-minus-square"></i>
                  Faltas totales sin atender
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
                <p class="card-category">Institución</p>
              </div>
              <div class="card-body ">
                <?php 
                  include '../Resource/charts/chartbar.php';
                ?>
            </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-bar-chart"></i> SLA, <?php echo $yearactual; ?>
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
                <p class="card-category">Institución</p>
              </div>
              <div class="card-body ">
                <?php 
                  include '../Resource/charts/chartdoughnut.php';
                ?>
            </div>
              <div class="card-footer ">

                <hr>
                <div class="stats">
                  <i class="fa fa-pie-chart" aria-hidden="true"></i> SLA, <?php echo $yearactual; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">FALTAS SEMESTRALES</h5>
                <p class="card-category">Institución</p>
              </div>
              <div class="card-body">
                <?php 
                  include '../Resource/charts/chartline.php';
                ?>
              </div>
              <div class="card-footer">
                <hr />
                <div class="card-stats">
                  <i class="fa fa-area-chart" aria-hidden="true"></i> SLA, <?php echo $yearactual; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Button trigger modal -->



<!-- Modal2 -->


      <?php include '../includes/footer.php';?>

