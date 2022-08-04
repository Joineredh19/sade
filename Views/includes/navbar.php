<?php 
  $datos = $HomeController->VerUsuarioxRol($_SESSION['id']);
?>

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
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-person-square"><?= $datos->__GET('Nombres').' '.$datos->__GET('Apellidos')?></i>
                  <p>
                    <span class="d-lg-none d-md-block">Más Acciones</span>
                  </p>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <?php if (( $datos->__GET('TRoles_id') == '1') or ( $datos->__GET('TRoles_id') == '2') or ( $datos->__GET('TRoles_id') == '3') ){ ?>
                  <a  type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registrar">Registrar</a>
                  <a  type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#generars">Crear registro de asistencias</a>
                  <a class="dropdown-item" href="../pages/login.php">Pasar Asistencias</a>
                  <a class="dropdown-item" href="../pages/inasistencias.php">Ver las Inasistencias</a>
                  <?php } ?>
                  <a class="dropdown-item" href="./perfil.php">Ver perfil</a>
                  <a class="dropdown-item" href="./salir.php">Cerrar sesión</a>
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
