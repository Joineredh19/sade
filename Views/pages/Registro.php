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
      <input type="text" id="nombreUsuario" class="fadeIn second" name="nombreUsuario" placeholder="Nombre">
      <input type="text" id="apellidosUsuario" class="fadeIn second" name="apellidosUsuario" placeholder="Apellidos">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="E-Mail">
      <input type="text" id="telefono" class="fadeIn second" name="telefono" placeholder="Teléfono">
      <input type="text" id="contrasena" class="fadeIn second" name="contrasena" placeholder="Contraseña">
    <!---Agregando ComboBox -->

    <div class="dropdown">
  <button class="dropbtn">Roles</button>
  <div class="dropdown-content">
    <a id="cordinadorTutores" name ="cordinadorTutores">Coordinador de tutores</a>
    <a id="orientadorEduca" name ="orientadorEduca">Orientador educativo</a>
    <a id="administrador" name ="administrador">Administrador</a>
    <a id="tutorAcademico" name ="tutorAcademico">Tutor académico</a>
    <a id="alumno" name ="alumno">Alumno</a>
    <a id="padreFamilia" name ="padreFamilia">Padres de familia</a>
  </div>
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