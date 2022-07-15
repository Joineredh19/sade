<?php include '../includes/header.php';

require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();


  $data = $HomeController->VerUsuarioxId($_SESSION['id']);


?>
 <link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/UDG- VectorR.png">
 <link rel="icon" type="image/png" href="../Resource/img/UDG- VectorR.png">
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="http://www.cuc.udg.mx/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <title>Mi perfil</title>
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
          
        <?php 
      include '../includes/sidebar.php';
      ?>
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
            <a class="navbar-brand" href="javascript:;">Perfil </a>
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
      <?php 
      include '../includes/navbar.php';
      ?>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
              <!--<img src="../Resource/img/LogoUni4.png" alt="alt=User Icon" style="width: 310px;margin-left: 10px; margin-top: 8px;">-->
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                  <?php
                    include '../../Actions/UsuarioPerfil/UsuarioImagen.php'
                  ?>
                    <h5 class="title"><?= $data->__GET('Nombres').' '.$data->__GET('Apellidos')?></h5>
                  </a>
                  <p class="description">
                  <?php
                      echo "".$data->__GET('Email')."";
                  ?>
                  </p>
                    <form action="#" method="POST" enctype="multipart/form-data">
                      <input type="file" id="file-uploader"  name="fotoperfil">
                      <div id="feedback">  
                      </div>
                      <div>
                        <br>
                        <label id="progress-label" class="progress-bar progress-bar-striped bg-info" ></label>
                        <progress id="progress" value="0" max="100"> </progress>
                      </div>
                      <input type="submit" class="btn btn-info"  name="FotoPerfil" value="Actualizar Foto">
                    </form>
                </div>
                        
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Alumnos</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../Resource/img/icon.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        DJ Khaled
                        <br />
                        <span class="text-muted"><small>Offline</small></span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../Resource/img/icon.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        Creative Tim
                        <br />
                        <span class="text-success"><small>Available</small></span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="../Resource/img/icon.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-ms-7 col-7">
                        Flume
                        <br />
                        <span class="text-danger"><small>Busy</small></span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Perfil</h5>
              </div>
              <div class="card-body">
                <form>
                 <div>
                 <div class="col-md-12 px-1">
                    <label>Rol</label>
                    <form method="post" id="formularioRegistro" name="formularioRegistro" action="../../Actions/Register/registrar.php">
                 <select name="Roles" id="Rol" class="form-control" value=""> </select>
                 <br>
                </div>
                 </div>
                <div class="row">
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <label>Código</label>
                        <input type="text" class="form-control"  placeholder="Codigo" >
                      </div>
                    </div>

                      <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" class="form-control" placeholder="E-mail"  value="<?php if($data != NULL) echo $data->__GET('Email') ?>  "  >
                      </div>
                    </div>

                  <div class="row">
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <label>Nombre(s)</label>
                        <input type="text" class="form-control"  placeholder="Nombre(s)"  value="<?php if($data != NULL) echo $data->__GET('Nombres') ?>  "   >
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Apellido(s)</label>
                        <input type="text" class="form-control" placeholder="Apellido(s)"  value="<?php if($data != NULL) echo $data->__GET('Apellidos') ?>  "  >
                      </div>
                    </div>
                 
                  </div>
                  <div class="row">
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" placeholder="Teléfono"  value="<?php if($data != NULL) echo $data->__GET('Telefono') ?>  "  >
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" placeholder="Status" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Calle y Numero</label>
                        <input type="text" class="form-control" placeholder="Calle y Numero" value="Calle y número">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>No. Seguro Social</label>
                        <input type="text" class="form-control" placeholder="No. Seguro Social">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>RFC</label>
                        <input type="text" class="form-control" placeholder="RFC" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>CURP</label>
                        <input type="number" class="form-control" placeholder="CURP">
                      </div>
                    </div>
                  </div>
                  <div>
                  <div class="col-md-12 px-1">
                  <label>Seleccione su tipo de sangre</label>
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
                  </div>
                  <br>
                  </div>

                  <div class="col-md-12 pl-3">
                      <div class="form-group">
                        <label>Alergias</label>
                        <input type="text" class="form-control" placeholder="Alergias">
                      </div>
                    </div>
                  </div>
                  <div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Observaciones</label>
                        <textarea class="form-control textarea">Comentarios</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Actualizar Perfil</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- Button trigger modal -->



<!-- Modal1 -->
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