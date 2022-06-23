<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <title>Sistema Acceso De Estudiantes ADMINISTRADOR</title>

    <link href="../Resource/css/login.css"  rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<?php

require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
if (!session_id()) @session_start();
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
?>

<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../Resource/img/LogoUni2.png"  alt="User Icon" />
      <h3>SADE</h3>
      <h3>Sistema Acceso De Estudiantes</h3>
    </div>

    <!-- Login Form -->
    <form action="../../Actions/login/login.php" method="post" enctype="multipart/form-data" >
      <input type="text" id="Email" class="fadeIn second" name="Email" placeholder="E-mail">
      <input type="text" id="Password" class="fadeIn second" name="Password" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Ingresar">
    </form>
    </div>
  </div>
</div>

</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>