<?php include '../includes/header.php';

require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
if (!session_id()) @session_start();
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
date_default_timezone_set('America/Bogota');

if (isset($_GET['id'])) {
  $IdUsuario = $_GET['id'];
  $data = $HomeController->VerUsuarioxId($IdUsuario);
}else{

  $data = NULL;
}

?>
 <link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/UDG- VectorR.png">
 <link rel="icon" type="image/png" href="../Resource/img/UDG- VectorR.png">
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="http://www.cuc.udg.mx/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../Resource/img/UDG - Vector Blanco.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="http://www.cuc.udg.mx/" class="simple-text logo-normal">
        SADE
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
        <li >
            <a href="./index.php" style="margin-left: 5px;">
              <i class="bi bi-layout-text-window-reverse"></i>
              <p>TABLERO</p>
            </a>
          </li>
          <li>
            <a href="./user.html" style="margin-left: 5px;">
              <i class="bi bi-person"></i>
              <p>ALUMNO</p>
            </a>
          </li>

            <li>
            <a href="./dashboard.html" style="margin-left: 5px; font-size: 11.5px;">
              <i class="bi bi-clipboard-data"></i>
              <p>COORDINADOR DE TUTORES</p>
            </a>
          </li>
          <li>
            <a href="./icons.html" style="margin-left: 5px;">
              <i class="bi bi-clipboard-check"></i>
              <p>ORIENTADOR EDUCATIVO</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html" style="margin-left: 5px;">
              <i class="bi bi-book"></i>
              <p>TUTOR ACADEMICO</p>
            </a>
          </li>
          <li>
            <a href="./tables.html" style="margin-left: 5px;">
              <i class="bi bi-people"></i>
              <p>PADRES DE FAMILIA</p>
            </a>
          </li>
          <li>
            <a href="./map.html" style="margin-left: 5px;">
              <i class="bi bi-gear"></i>
              <p>ADMINISTRADOR</p>
            </a>
          </li>

          <li>
            <a href="./Tablas.php" style="margin-left: 5px;">
              <i class="bi bi-person-lines-fill"></i>
              <p>USUARIOS</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Buscar...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-person-square"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Nombres').' '.$HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Apellidos')?></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a  type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registrar">Registrar</a>
                  <a class="dropdown-item" href="./perfil.php">Ver perfil</a>
                  <a class="dropdown-item" href="../../Actions/login/logout.php">Cerrar sesión</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="row">
       <!-- Login Form -->
     <form method="post" id="formularioRegistro" name="formularioRegistro" action="../../Actions/Register/actualizar.php">
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

    <input type="submit" class="fadeIn fourth" id="btnRegistrarse" value="Registrarse">
    </form>
        </div>
        <!-- Button trigger modal -->



<!-- Modal2 -->
<div class="modal fade" id="registrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">REGISTRO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" id="formularioRegistro" name="formularioRegistro" action="../../Actions/Register/registrar.php">
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
      <input type="number" id="telefono" class="form-control" name="telefono" placeholder="Teléfono" required>
      <br>
      <input type="password"  class="form-control" id="contrasena"  name="contrasena" placeholder="Contraseña">
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



      <?php include '../includes/footer.php';?>

