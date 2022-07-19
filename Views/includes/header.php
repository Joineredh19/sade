<?php
session_start();
header("Content-Type: text/html; charset=utf-8");

if(!isset($_SESSION["id"])){
    header("location: ../../Views/pages/loginAdmin.php");
}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10*60)) {
  session_unset();     
  session_destroy();   
  header("location: ../../Views/pages/loginAdmin.php");
}
$_SESSION['LAST_ACTIVITY'] = time();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/SLALogo.png">
 <link rel="icon" type="image/png" href="../Resource/img/SLALogo.png">
  <title>
    SADE INDEX
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="icon" type="image/png" href="../Resource/img/SLALogo.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../Resource/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="../Resource/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../Resource/css/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
</head>

<div class="modal fade" id="registrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">REGISTRO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" id="formularioRegistro" name="formularioRegistro" action="../../Actions/register/registrar.php">
     <select name="Roles" id="Rol" class="form-control" value=""> </select>
      <br>
      <input type="form" id="nombreUsuario" class="form-control" name="nombreUsuario" placeholder="Nombre" required>
      <br> 
      <input type="form" id="apellidosUsuario" class="form-control" name="apellidosUsuario" placeholder="Apellidos" required>
      <br>
      <select name="generos" id="Generos" class="form-control " aria-label="Default select example"></select>
      <br>
      <input type="form" id="email" class="form-control" name="email" placeholder="E-Mail" required>
      <br>
      <input type="text" id="telefono" class="form-control" name="telefono" placeholder="Teléfono" required>
      <br>
      <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Contraseña">
      <br>
      <input type="date"  class="form-control" id="fechanacimiento"  name="fechanacimiento" placeholder="Fecha de nacimiento">
  <br>
  
  
  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-success" id="btnRegistrarse" value="Registrar">
       
      </div>
    </form>

   
    </div>
  </div>
</div>
      </div>
</form>




<?php include '../../Actions/CorteAsistencia/GListaAsistencias.php';?>
<div class="modal fade" id="generars" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Generar script</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      
      <form method="post" id="formularioScript" name="formularioScript" action="#">
        <select name="SelectTurno" id="SelectTurno" class="form-control" value=""> </select>
          <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-success" name="GenerarScript" id="btnRegistrarse" value="Generar script">
        </div>
      </form>

   
    </div>
  </div>
</div>
      </div>
</form>


