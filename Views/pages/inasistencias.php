<?php include '../includes/header.php';

require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

$datos = $HomeController->VerUsuarioxRol($_SESSION['id']);

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
            <a class="navbar-brand" href="javascript:;">Registros de Inasistencias</a>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              
              </div>
              <div class="card-body">
              <?php if (($datos->__GET('TRoles_id') == '1') xor ($datos->__GET('TRoles_id') == '2') xor ($datos->__GET('TRoles_id') == '3')){ 
                include '../../Asistencia/HabilitarAsistencia.php';  
              ?>
              <?php  $msg->display(); ?>  
                <div class="table-responsive">
                <form method="post"  action="#"  enctype="multipart/form-data" style="text-align: center;">
                  <label style="font-size: 15px;">Habilitar registros por rango de fecha</label>
                  <br>
                  <label>Fecha Inicio:</label>
                  <input type="date" name="FechaStartHab" style="margin-right: 10px;" required>
                  <label>Fecha Final:</label>
                  <input type="date" name="FechaEndHab" required>
                  <br>
                  <button type="submit" class="btn btn-success " id="btnRegistrarse" name="HabilitarIna" value="HabilitarIna">Habilitar</button>
                </form>
                <form method="post"  action="#"  enctype="multipart/form-data"  style="text-align: center;">
                  <label style="font-size: 15px;">Inhabilitar registros a partir de la fecha actual</label>
                  <br>
                  <button type="submit" class="btn btn-success" id="btnRegistrarse" name="InhabilitarIna" value="InhabilitarIna" onclick="return ConfirmacionInhabilitar()">Inhabilitar</button>
                </form>
                <br>
                  <input class="form-control mb-4" id="tableSearch" type="text" placeholder="Buscar">
                    <table class="table">
                      <thead class=" text-primary">
                        <th class="text-center">
                          id
                        </th>
                        <th class="text-center">
                          Código
                        </th>
                        <th class="text-center">
                          Turno
                        </th>
                        <th class="text-center">
                          Nombre
                        </th>
                        <th class="text-center">
                          Apellido
                        </th>
                        <th class="text-center">
                          Fecha/Hora de Registro
                        </th>
                        <th class="text-center">
                          Descripción de Falta 
                        </th>
                        <th class="text-center">
                          Aptitud
                        </th>
                        <th class="text-center">
                          Aprovechamiento
                        </th>
                        <th class="text-center">
                          Acción
                        </th>
                        </thead>
                        <tbody id="myTable">
                    
                          <?php 
                            include '../../Asistencia/ListaInasistencias.php';
                          ?>
                      
                      </tbody>
                      </tbody>
                    </table>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>



<?php include '../includes/footer.php';?>