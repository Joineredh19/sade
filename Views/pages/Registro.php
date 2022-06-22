<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <title>SADE</title>

    <link href="../Resource/css/login.css"  rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

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
     <form method="post" id="formularioRegistro" name="formularioRegistro" action="../../Actions/Register/registrar.php">
     <select name="Roles" id="Roles" class="fadeIn second" value="">
      </select>
      <input type="text" id="nombreUsuario" class="fadeIn second" name="nombreUsuario" placeholder="Nombre">
      <input type="text" id="apellidosUsuario" class="fadeIn second" name="apellidosUsuario" placeholder="Apellidos">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="E-Mail">
      <input type="text" id="telefono" class="fadeIn second" name="telefono" placeholder="Teléfono">
      <input type="text" id="contrasena" class="fadeIn second" name="contrasena" placeholder="Contraseña">
    <!---Agregando ComboBox -->
   <br>
    <div class="dropdown">
<!--  <button class="dropbtn">   Roles</button>
  <br>
  <div class="dropdown-content">
    <a href="#">Coordinador de tutores</a>
    <a href="#">Orientador educativo</a>
    <a href="#">Administrador</a>
    <a href="#">Tutor académico</a>
    <a href="#">Alumno</a>
    <a href="#">Padres de familia</a>
    <br>
  </div>-->
  <input type="submit" class="fadeIn fourth" id="btnRegistrarse" value="Registrarse">
    </form>

    <!-- Remind Passowrd -->
    <label> ¿Ya tiene cuenta? </label>
    <div id="formFooter">
      <a class="underlineHover" href="Login.php">Iniciar sesión</a>
    </div>

  </div>
</div>

</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>

<script>
$(document).ready(function(){

$.ajax({
    type: 'POST',
    url: '../../Actions/Roles/Roles.php',
    data: {'peticion': 'Roles'}    
})
.done(function(Roles){
    $('#Roles').html(Roles)
})
.fail(function(){
    alert('Error')
})
})

</script>