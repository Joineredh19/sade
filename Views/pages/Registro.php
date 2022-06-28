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
      <br>
    </div>

    <!-- Login Form -->
     <form method="post" id="formularioRegistro" name="formularioRegistro" action="../../Actions/Register/registrar.php">
     <select name="Roles" id="Roles" class="form-control" value=""> </select>
      <br>
      <input type="form" id="nombreUsuario" class="form-control" name="nombreUsuario" placeholder="Nombre" required>
      <br> 
      <input type="form" id="apellidosUsuario" class="form-control" name="apellidosUsuario" placeholder="Apellidos" required>
      <br>
      <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Código de alumno">
  <br>
  <select name="TipoDeTurno" id="TipoDeTurno" class="form-control " aria-label="Default select example">
  <option selected>Seleccione su turno</option>
  <option value="sangreaa">Matutino</option>
  <option value="sangrea">Vespertino</option>
  <option value="sangrea">Mixto</option>
  
  </select>
  <br>
      <input type="form" id="email" class="form-control" name="email" placeholder="Teléfono" required>
      <br>
      <input type="number" id="telefono" class="form-control" name="telefono" placeholder="E-Mail" required>
      <br>
      <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Contraseña">
  <br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Status">
  <br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Número de seguro social">
  <br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="RFC">
  <br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="CURP">
  <br>
  <select name="TipoSangre" id="tipoSangre" class="form-control " aria-label="Default select example">
  <option selected>Seleccione su tipo de sangre</option>
  <option value="sangreaa">A+</option>
  <option value="sangrea">A-</option>
  <option value="sangrebb">B+</option>
  <option value="sangreb">B-</option>
  <option value="sangreoo">O+</option>
  <option value="sangreo">O-</option>
  <option value="sangreaabb">AB+</option>
  <option value="sangreab">AB-</option>
  </select>
<br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Alergias">
  <br>
 
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Calle y número">
  <br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Colonia">
  <br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Código Postal">
  <br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Estado">
  <br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Ciudad">
  <br>
  <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="País">
  <br>
  
  
  
 
    </form>


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
