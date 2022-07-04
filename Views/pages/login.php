
<!DOCTYPE html>
<html lang="es">

<head>
<link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/UDG- VectorR.png">
 <link rel="icon" type="image/png" href="../Resource/img/UDG- VectorR.png">
    <meta charset="utf-8">

    <title>Sistema Acceso De Estudiantes</title>

    <link href="../Resource/css/login.css"  rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../Resource/img/LogoUni4.png"  alt="User Icon" style="width: 400px;"/>
      <div style="text-align:center"><!-- <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3530597">
      <span style="color:gray;"></span>
     </a></h4> -->
      <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FMexico_City" width="100%" height="90" frameborder="0" seamless>
     </iframe> 
      </div>
      <h3>SADE</h3>
      <h3>Sistema Acceso De Estudiantes</h3>
    </div>

    <!-- Login Form -->
    <?php require_once '../../Asistencia/Asistencia.php'?>
    <form action="#" method="POST">
      <input type="text" id="email_tel" class="fadeIn second" name="email_tel" required placeholder="Codigo Institucional">
      <input type="text" id="observaciones" class="fadeIn second" name="observaciones" placeholder="Observaciones">
      <input type="submit" class="fadeIn fourth" value="Ingresar" name="enviar">
      
    </form>

    <!-- Remind Passowrd -->
    <label> ¿Eres administrador? </label>
    <div id="formFooter">
      <a class="underlineHover" href="loginAdmin.php">Iniciar sesión</a>
    </div>

  </div>
</div>

</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>