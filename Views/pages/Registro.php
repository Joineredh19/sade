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
    <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Roles
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Coordinador de tutores</a>
    <a class="dropdown-item" href="#">Orientador educativo</a>
    <a class="dropdown-item" href="#">Administrador</a>
    <a class="dropdown-item" href="#">Tutor académico</a>
    <a class="dropdown-item" href="#">Alumno</a>
    <a class="dropdown-item" href="#">Padres de familia</a>
  </div>
</div> 
      <input type="text" id="codigoUsuario" class="fadeIn second" name="codigoUsuario" placeholder="Nombre">
      <input type="text" id="direccionUsuario" class="fadeIn second" name="direccionUsuario" placeholder="Apellidos">
      <input type="text" id="nss" class="fadeIn second" name="nss" placeholder="E-Mail">
      <input type="text" id="rfc" class="fadeIn second" name="rfc" placeholder="Teléfono">
      <input type="text" id="curp" class="fadeIn second" name="curp" placeholder="Contraseña">
      <input type="text" id="alergia" class="fadeIn second" name="alergia" placeholder="Status">
      <input type="text" id="alergia" class="fadeIn second" name="alergia" placeholder="Status">
      <input type="submit" class="fadeIn fourth" value="Registrarse">
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