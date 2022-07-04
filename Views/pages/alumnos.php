
<?php include '../includes/header.php';

require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

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
            <a class="navbar-brand" href="javascript:;">ALUMNOS</a>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              
              </div>
              <div class="card-body">
              <?php  $msg->display(); ?>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Nombre
                      </th>
                      <th>
                        Apellido
                      </th>
                      <th class="text-center">
                        E-mail
                      </th>
                      <th class="text-center">
                        Teléfono
                      </th>
                      <th class="text-center">
                    Género
                      </th>
                      <th class="text-center">
                        Rol
                      </th>
                      <th class="text-center">
                        Acción
                      </th>
                    </thead>
                    <tbody>
                    <tbody>
                      
                            <?php #$HomeController->VerUsuarioxId($_SESSION['id']) -> $key?>
                                <tr>
                                    <td align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('id') ?></td>
                                    <td align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Nombres') ?></td>
                                    <td  align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Apellidos') ?></td>
                                    <td  align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Email') ?></td>
                                    <td  align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Telefono') ?></td>
                                    <td  align="center"><?php switch($HomeController->VerUsuarioxId($_SESSION['id'])->__GET('tgeneros_id')){
                                      case 1:
                                        echo 'Hombre';
                                      break;
                                      case 2:
                                        echo 'Mujer';
                                      break;
                                      case 3:
                                        echo 'Otro';
                                      break;
                                    }?></td>
                                    <td  align="center"><?php switch($HomeController->VerUsuarioxId($_SESSION['id'])->__GET('TRoles_id')){
                                      case 1:
                                        echo 'Administrador';
                                      break;
                                      case 2:
                                        echo 'Orientador Educativo';
                                      break;
                                      case 3:
                                        echo 'Coordinador de Tutores';
                                      break;
                                      case 4:
                                        echo 'Estudiante';
                                      break;
                                      case 5:
                                        echo 'Tutor Academico';
                                      break;
                                      case 6:
                                        echo 'Tutor Padre';
                                      break;
                                    } ?></td>
                                    <td align="center" style="padding: 0;"> <a href="completarinfo.php?IdUsuario=<?= $key->__GET('id') ?>" target="_blank" title="Alumnos" class="btn btn-success"><i class="fa fa-eye"></i></a></td>
                                  
                                  </tr>
                          <?php #} ?>
                    </tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



<?php include '../includes/footer.php';?>
