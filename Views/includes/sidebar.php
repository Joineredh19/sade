<?php 
  $dato = $HomeController->VerUsuarioxRol($_SESSION['id']);
?>

<?php if (( $dato->__GET('TRoles_id') == '1') or ( $dato->__GET('TRoles_id') == '2') or ( $dato->__GET('TRoles_id') == '3') ){ ?>
<li class="">
            <a href="./index.php" style="margin-left: 5px;">
              <i class="bi bi-layout-text-window-reverse"></i>
              <p>TABLERO</p>
            </a>
          </li>
          <li>
            <a href="./alumnos.php" style="margin-left: 5px;">
              <i class="bi bi-person"></i>
              <p>ALUMNO</p>
            </a>
          </li>

            <li>
            <a href="./coordinador.php" style="margin-left: 5px; font-size: 11.5px; margin-right: 1px;">
              <i class="bi bi-clipboard-data"></i>
              <p>COORDINADOR DE TUTORES</p>
            </a>
          </li>
          <li>
            <a href="./orientadoEducativo.php" style="margin-left: 5px;">
              <i class="bi bi-clipboard-check"></i>
              <p>ORIENTADOR EDUCATIVO</p>
            </a>
          </li>
          <li>
            <a href="./tutoracademico.php" style="margin-left: 5px;">
              <i class="bi bi-book"></i>
              <p>TUTOR ACADEMICO</p>
            </a>
          </li>
          <li>
            <a href="./padresfamilia.php" style="margin-left: 5px;">
              <i class="bi bi-people"></i>
              <p>PADRES DE FAMILIA</p>
            </a>
          </li>

          <li>
            <a href="./tablas.php" style="margin-left: 5px;">
              <i class="bi bi-person-lines-fill"></i>
              <p>USUARIOS</p>
            </a>
          </li>
  <?php }else{ ?>
    <?php if ( $dato->__GET('TRoles_id') == '4'){ ?>
      <li class="active ">
            <a href="./index.php" style="margin-left: 5px;">
              <i class="bi bi-layout-text-window-reverse"></i>
              <p>TABLERO</p>
            </a>
          </li>
<li >
            <a href="./alumnos.php" style="margin-left: 5px;">
              <i class="bi bi-person"></i>
              <p>ALUMNO</p>
            </a>
          </li>

          <?php }else {?>
            <?php if ( $dato->__GET('TRoles_id') == '5'){ ?>
              <li class="active ">
            <a href="./index.php" style="margin-left: 5px;">
              <i class="bi bi-layout-text-window-reverse"></i>
              <p>TABLERO</p>
            </a>
          </li>
<li >
            <a href="./alumnos.php" style="margin-left: 5px;">
              <i class="bi bi-person"></i>
              <p>ALUMNO</p>
            </a>
          </li>

          <li>
            <a href="./tutoracademico.php" style="margin-left: 5px;">
              <i class="bi bi-book"></i>
              <p>TUTOR ACADEMICO</p>
            </a>
          </li>

           
            <?php }else {?>
            <?php if ( $dato->__GET('TRoles_id') == '6'){ ?>
              <li class="active ">
            <a href="./index.php" style="margin-left: 5px;">
              <i class="bi bi-layout-text-window-reverse"></i>
              <p>TABLERO</p>
            </a>
          </li>
<li >
            <a href="./alumnos.php" style="margin-left: 5px;">
              <i class="bi bi-person"></i>
              <p>ALUMNO</p>
            </a>
          </li>

          <li>
            <a href="./padresfamilia.php" style="margin-left: 5px;">
              <i class="bi bi-people"></i>
              <p>PADRES DE FAMILIA</p>
            </a>
          </li>


          <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            