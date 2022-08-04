<?php include '../includes/header.php';

require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();

require '../../Lib/FlashMessages.php';
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

?>

<link rel="apple-touch-icon" sizes="76x76" href="../Resource/img/SLALogo.png">
 <link rel="icon" type="image/png" href="../Resource/img/SLALogo.png">
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
      <a href="../index.php" class="simple-text logo-mini">
          <div class="logo-image-small">
          <img src="../Resource/img/SLALogo.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="../index.php" class="simple-text logo-normal">
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
     <?php 
      include '../includes/navbar.php';
      ?>
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
                        Tutor Academico
                      </th>
                      <th class="text-center">
                        Acción
                      </th>
                    </thead>
                    <tbody>
                    <tbody>
                              <?php switch($HomeController->VerUsuarioxId($_SESSION['id'])->__GET('TRoles_id')){
                                case 1 : 
                                 $HomeController->vistaalumnos();
                                break;
                                case 2 : 
                                  $HomeController->vistaalumnos();
                                break;
                                case 3 : 
                                  $HomeController->vistaalumnos();
                                break;
                               case 4:?>
                                <tr>
                                    <td align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('id') ?></td>
                                    <td align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Nombres') ?></td>
                                    <td  align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Apellidos') ?></td>
                                    <td  align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Email') ?></td>
                                    <td  align="center"><?= $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('Telefono') ?></td>
                                    <td  align="center"><?php echo $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('tgeneros_id')?></td>
                                    <td  align="center"><?php echo $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('TRoles_id')?></td>
                                    <td  align="center"><?php echo $HomeController->VerUsuarioxId($_SESSION['id'])->__GET('TRoles_id')?></td>
                                    <td align="center" style="padding: 0;"> <a href="completarinfo.php?IdUsuario=<?= $key->__GET('id') ?>" target="_blank" title="Alumnos" class="btn btn-success"><i class="fa fa-eye"></i></a></td>
                                    <td align="center" style="padding: 0;"> <a href="imprimir.php?IdUsuario=<?= $key->__GET('id') ?>" title="Imprimir datos" class="btn btn-success"><i class="fa fa-print"></i></a></td>
                                  
                                  </tr>
                            <?php break;
                                  case 5:?>  
                                    <?php foreach ($HomeController->ListarUsuario_tutor($_SESSION["id"]) as $key){?>
                                    
                                      <tr>
                                        <td align="center"><?= $key->__GET('id') ?></td>
                                        <td align="center"><?= $key->__GET('Nombres') ?></td>
                                        <td  align="center"><?= $key->__GET('Apellidos') ?></td>
                                        <td  align="center"><?= $key->__GET('Email') ?></td>
                                        <td  align="center"><?= $key->__GET('Telefono') ?></td>
                                        <td  align="center"><?= $key->__GET('genero') ?></td>
                                        <td  align="center"><?= $key->__GET('rol') ?></td>
                                        <td align="center" style="padding: 0;"> <a href="completarinfo.php?IdUsuario=<?= $key->__GET('id') ?>" target="_blank" title="Completar Información" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
                                        <td align="center" style="padding: 0;"> <a href="imprimir.php?IdUsuario=<?= $key->__GET('id') ?>" title="Imprimir datos" class="btn btn-success"><i class="fa fa-print"></i></a></td>
                                      <tr>
                                      
                                      <?php }
                                  break;
                                  case 6:
                                    foreach ($HomeController->ListarUsuario_Padre($_SESSION["id"]) as $key){?>
                                  
                                      <tr>
                                        <td align="center"><?= $key->__GET('id') ?></td>
                                        <td align="center"><?= $key->__GET('Nombres') ?></td>
                                        <td  align="center"><?= $key->__GET('Apellidos') ?></td>
                                        <td  align="center"><?= $key->__GET('Email') ?></td>
                                        <td  align="center"><?= $key->__GET('Telefono') ?></td>
                                        <td  align="center"><?= $key->__GET('genero') ?></td>
                                        <td  align="center"><?= $key->__GET('rol') ?></td>
                                        <td align="center" style="padding: 0;"> <a href="completarinfo.php?IdUsuario=<?= $key->__GET('id') ?>" target="_blank" title="Completar Información" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
                                        <td align="center" style="padding: 0;"> <a href="imprimir.php?IdUsuario=<?= $key->__GET('id') ?>" title="Imprimir datos" class="btn btn-success"><i class="fa fa-print"></i></a></td>
                                      <tr>
                                    
                                    <?php }
                                break;
                            ?>
                            <?php } ?>
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
