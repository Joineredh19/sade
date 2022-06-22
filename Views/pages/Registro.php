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
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ingresa tú codigo">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ingresa tú dirección">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ingresa tú número de seguro social">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ingresa tú RFC (13 digitos)">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ingresa tú CURP (18 digitos)">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ingresa tú tipo de sangre">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Ingresa si tienes alguna alergía">
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