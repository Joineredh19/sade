
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
    <h3></h3>
    <h3>SADE</h3>
    <h3>Sistema Acceso De Estudiantes</h3>
    
    <form action="#" method="POST">
      <input type="text" id="email_tel" class="fadeIn second" name="email_tel" required placeholder="Codigo Institucional">
      <input type="text" id="observaciones" class="fadeIn second" name="observaciones" placeholder="Observaciones (Opcional)">
      <input type="submit" class="fadeIn fourth" value="Ingresar" name="enviar">
    </form>

    <div id="formFooter">
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