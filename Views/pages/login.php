<?php 
  session_start();

  require_once('../../Controllers/HomeController.php');
  $HomeController = new HomeController();
  $datos = $HomeController->VerUsuarioxRol($_SESSION['id']);

  if(!isset($_SESSION["id"])){
    header("location: ../../Views/pages/loginAdmin.php");
  } else if (($datos->__GET('TRoles_id') != '1') xor ($datos->__GET('TRoles_id') != '2') xor ($datos->__GET('TRoles_id') != '3')){
    header("location: ../../Views/pages/index.php");
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>
<link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/SLALogo.png">
 <link rel="icon" type="image/png" href="../Resource/img/SLALogo.png">
    <meta charset="utf-8">

    <title>Sistema Acceso De Estudiantes</title>

    <link href="../Resource/css/login.css"  rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../Resource/css/demo/relojestilo.css">
  </head>

<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">


      <h3></h3>
      <h3>Sistema Acceso</h3>
      <img src="../Resource/img/SLALogo.png"  alt="User Icon" style="width: 100px; padding-bottom: 10px;"/>
      <!-- INICIO RELOJ -->
    <div class="container-clock" style="height: 72px;margin-bottom: 10px;">
      <h1 id="time">00:00:00</h1>
      <p id="date">date</p>
    </div>
    <script src="../Resource/js/plugins/clock.js"></script>
      <!-- FIN RELOJ -->

    </div>

    <!-- Login For -->
    <?php require_once '../../Asistencia/Asistencia.php'?>
    <select name="TRoles" id="TRoles" required class="form-control " aria-label="Default select example">
				<option value="#" selected>Elige el tipo de asistencia</option>
        <option value="1">Interna</option>
        <option value="2">Externa</option>
		</select>
    
    <div id="FormuAsis"></div>


    <!-- Remind Passowrd -->
    <label> ¿Eres administrador? </label>
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Regresar</a>
    </div>

  </div>
</div>

</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">			
  $(document).ready(function(){
    $("#TRoles").on('change', function () {
        $("#TRoles option:selected").each(function () {
            rolelegido=$(this).val();
            $.post("../../Asistencia/AsistenciaRol.php", { rolelegido: rolelegido }, function(data){
                $("#FormuAsis").html(data);
            });         
        });
   });
  });
</script>
</html>