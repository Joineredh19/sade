<?php include '../includes/header.php';
?>

<?php
require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
if (!session_id()) @session_start();
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
date_default_timezone_set('America/Mexico_City');

if (isset($_GET['IdUsuario'])) {
  $id = $_GET['IdUsuario'];
  $data = $HomeController->VerUsuarioxId($id);
}else{
  $data = NULL;
}


?>
 <link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/UDG- VectorR.png">
 <link rel="icon" type="image/png" href="../Resource/img/SLALogo.png">
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="http://www.cuc.udg.mx/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../Resource/img/SLALogo.png">
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
            <a class="navbar-brand" href="javascript:;">Seguimiento del regitro de inasistencia</a>
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
        <!-- Login Form -->
        <?php 
          include '../../Asistencia/SeguiAsistencia.php';
        ?>
        <form method="post"  action="#"  enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $data['id'];?>">
          <label>ID</label>
          <input type="text"  class="form-control" id="descripcionfalta"  name="asisID" disabled value="<?php echo $data['id']?>">
          <br>
          <label>Fecha/Hora de Registro</label>
          <input type="text"  class="form-control" id="descripcionfalta"  name="asiscodigo" disabled value="<?php echo $data['FHoraAsistencia']?>">
          <br>
          <label>Codigo</label>
          <input type="text"  class="form-control" id="descripcionfalta"  name="asiscodigo" disabled value="<?php echo $data['Codigo']?>">
          <br>
          <label>Descripcion de Falta</label>
          <input type="text"  class="form-control" id="descripcionfalta"  name="desfalta" disabled value="<?php echo $data['DesFalta']?>">
          <br>
          <label>Aptitud</label>
          <select name="Aptitud" id="Aptitud" class="form-control" aria-label="Aptitud">
            <?php if (isset($data['Aptitud'])) {?>
              <option value="<?php echo $data['Aptitud'];?>" selected><?php echo $data["DesAptitud"];?></option>
            <?php }?>
              <option value="#">Elige un tipo de aptitud</option>
              <option value="0">Mala Conducta</option>
              <option value="1">Regular Conducta</option>
              <option value="2">Buena Conducta</option>
              <option value="3">Excelente Conducta</option>
          </select>
          <br>
          <label>Aprovechamiento</label>
          <select name="Aprovechamiento" id="Aprovechamiento" class="form-control " aria-label="Aprovechamiento">
            <?php if (isset($data['Aptitud'])) {?>
              <option value="<?php echo $data['Aprovechamiento'];?>" selected><?php echo $data["DesAprovechamiento"];?></option>
            <?php }?>
              <option value="#">Elige un tipo de aprovechamiento</option>
              <option value="0">Mal Aprovechamiento</option>
              <option value="1">Regular Aprovechamiento</option>
              <option value="2">Buen Aprovechamiento</option>
              <option value="3">Excelente Aprovechamiento</option>
          </select>
          <button type="submit" class="btn btn-success " id="btnRegistrarse" name="SeguiAsistencia" value="Actualizar">Actualizar</button>
        </form>
      </div>
   
      <?php include '../includes/footer.php';?>
   