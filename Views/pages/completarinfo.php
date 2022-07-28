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
            <a class="navbar-brand" href="javascript:;">Completar Información</a>
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
     <form method="post"  action="<?php echo '../../Actions/register/actualizar.php';?>"  enctype="multipart/form-data">
     <input type="hidden" id="" class="form-control" name="idUsuario" placeholder=""  value="<?=  $id?>" >
     <br>
     <input type="hidden" id="Role" class="form-control" name="rol" placeholder="Rol..."  value="<?php if($data != NULL &&  $data->__GET('TRoles_id') != NULL) echo $data->__GET('TRoles_id') ?>"   >
     <br>
  <input type="text"  class="form-control" id="codigo1"  name="codigo" placeholder="Código">
     <br> 
      <input type="text" id="Usuario" class="form-control" name="nombreUsuario" placeholder="Nombre" required value="<?php if($data != NULL) echo $data->__GET('Nombres') ?>  "  >
      <br> 
      <input type="text" id="apellidosUsuario1" class="form-control" name="apellidosUsuario" placeholder="Apellidos" required value="<?php if($data != NULL) echo $data->__GET('Apellidos') ?>  ">
      <br>
  
  <input type="text" id="email1" class="form-control" name="email" placeholder="Email" required value="<?php if($data != NULL) echo $data->__GET('Email') ?>  ">
  <br>
  <input type="text" id="telefono1" class="form-control" name="telefono" placeholder="Telefono" required value="<?php if($data != NULL) echo $data->__GET('Telefono') ?>">
  <br>
  <input type="text"  class="form-control" id="status1"  name="status" placeholder="Status">
  <br>
  <input type="text"  class="form-control" id="numerosocial1"  name="numerosocial" placeholder="Número de seguro social">
  <br>
  <input type="text"  class="form-control" id="rfc1"  name="rfc1" placeholder="RFC">
  <br>
  <input type="text"  class="form-control" id="curp1"  name="curp1" placeholder="CURP">
  <br>
  <select name="TipoSangre" id="tipoSangre1" class="form-control " aria-label="Default select example">
  <option selected>Seleccione su tipo de sangre</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  </select>
<br>
  <input type="text"  class="form-control" id="alergia1"  name="alergia" placeholder="Alergias">
  <br>
 
  <select name="selepais" id="selepaises" class="form-control "> </select>
  <br>
  <select name="seleciudad" id="seleestados" class="form-control "> </select>
  <br>
  <select name="seleciudad" id="seleciudades" class="form-control " aria-label="Seleccione su ciudad"> </select>
  <br>
  <select name="selepostal" id="selepostales" class="form-control " aria-label="Seleccione su código postal"> </select>
  <br>
  <select name="selecolonia" id="selecolonia" class="form-control " aria-label="Seleccione su colonia"> </select>
  <br>
  <input type="text" class="form-control" id="calleynum"  name="calleynum" placeholder="Calle y Número">
  <br>
  <select name="seletutoraca" id="seletutoraca" class="form-control " aria-label="Seleccione tutor académico"> </select>
  <br>
  <select name="selepadre" id="selepadre" class="form-control " aria-label="Seleccione tutor padre"> </select>
  <br>
  <select name="seleturno" id="seleturno" class="form-control " aria-label="Seleccione el turno"> </select>
  <br>
    <button type="submit" class="btn btn-success " id="btnRegistrarse" value=""> Enviar</button>
    </form>
        </div>
   

      <?php include '../includes/footer.php';?>
      <script>

    var contenido = document.getElementById("Role").value;
    
    if (contenido == 5 || contenido == 6){
      $( "#Usuario" ).prop( "disabled", true );
      $( "#apellidosUsuario1" ).prop( "disabled", true );
      $( "#seleturno1" ).prop( "disabled", true );
      $( "#email1" ).prop( "disabled", true );
      $( "#telefono1" ).prop( "disabled", true );
      $( "#status1" ).prop( "disabled", true );
      $( "#numerosocial1" ).prop( "disabled", true );
      $( "#rfc1" ).prop( "disabled", true );
      $( "#curp1" ).prop( "disabled", true );
      $( "#tipoSangre1" ).prop( "disabled", true );
      $( "#alergia1" ).prop( "disabled", true );
      $( "#seletutoraca" ).prop( "disabled", true );
      $( "#selepadre" ).prop( "disabled", true );
      $( "#seleturno" ).prop( "disabled", true );
      $( "#codigo1" ).prop( "disabled", true );
     

    } else if  (contenido == 4) {
      $( "#Usuario" ).prop( "disabled", true );
      $( "#apellidosUsuario1" ).prop( "disabled", true );
      $( "#email1" ).prop( "disabled", true );
      $( "#telefono1" ).prop( "disabled", true );
    }
        </script>