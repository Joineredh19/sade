<?php
function Conexion(){
    $conn = mysqli_connect("cuc-udg22.mysql.database.azure.com",
  			"SADE22@cuc-udg22", "Sade_2022", "bzya6emoafjbqjkolhiy");
 
     return $conn;
 }
 $conn = Conexion();


if (isset($_POST["GenerarScript"])) {
    $turno = $_POST["SelectTurno"];
    
    $query_consulta = mysqli_query($conn, "SELECT tbitacorasalumnosdia.FHoraAsistencia, tdatosalumnos.TTurnos_id FROM tdatosalumnos 
                                                INNER JOIN tbitacorasalumnosdia
                                                WHERE DATE(tbitacorasalumnosdia.FHoraAsistencia) = DATE(NOW()) AND tdatosalumnos.TTurnos_id = 1");
        $consulta = mysqli_fetch_assoc($query_consulta);
    $query_consulta2 = mysqli_query($conn, "SELECT tbitacorasalumnosdia.FHoraAsistencia, tdatosalumnos.TTurnos_id FROM tdatosalumnos 
                                                INNER JOIN tbitacorasalumnosdia
                                                WHERE DATE(tbitacorasalumnosdia.FHoraAsistencia) = DATE(NOW()) AND tdatosalumnos.TTurnos_id = 2");
        $consulta2 = mysqli_fetch_assoc($query_consulta2);
    $query_consulta3 = mysqli_query($conn, "SELECT tbitacorasalumnosdia.FHoraAsistencia, tdatosalumnos.TTurnos_id FROM tdatosalumnos 
                                                INNER JOIN tbitacorasalumnosdia
                                                WHERE DATE(tbitacorasalumnosdia.FHoraAsistencia) = DATE(NOW()) AND tdatosalumnos.TTurnos_id = 3");
        $consulta3 = mysqli_fetch_assoc($query_consulta3);
   
        if($turno == 1){
            if ($consulta > 0) {
                echo '------------------------------------------------, Solo puede generar una lista de Asistencias Matutinas por día';
                    ?>
                        <script language="JavaScript">
                            function redireccionar() {
                                window.location = "../../Views/pages/index.php";
                            }
                            setTimeout("redireccionar()", 3000);
                        </script>
                    <?php
            }else{
                 $queryAsistencia = mysqli_query($conn, "SELECT tdatosalumnos.Codigo FROM `tusuarios` 
                                                        INNER JOIN tdatosalumnos ON tusuarios.id = tdatosalumnos.TUsuarios_id
                                                        WHERE tdatosalumnos.TTurnos_id = 1 AND tusuarios.Estatus = true ");
    
                while ($data_asistencia = mysqli_fetch_array($queryAsistencia)) {
                    $insertar = "INSERT INTO `tbitacorasalumnosdia`(`id`, `Codigo`, `FHoraAsistencia`, `Falta`, `DesFalta`) VALUES 
                        (NULL,
                        $data_asistencia[Codigo],
                        DEFAULT,
                        0,
                        'Inasistencia'
                        )";
                        $query=mysqli_query($conn, $insertar);
                }                                           
                echo '------------------------------------------------, Se ha generado la lista de Asistencias Matutinos de manera exitosa';
                ?>
                <script language="JavaScript">
                    function redireccionar() {
                        window.location = "../../Views/pages/index.php";
                    }
                    setTimeout("redireccionar()", 3000);
                </script>
                <?php
            }
    
        }else if($turno == 2){
            if ($consulta2 > 0) {
                echo '------------------------------------------------, Solo puede generar una lista de Asistencias Vespertinas por día';
                    ?>
                        <script language="JavaScript">
                            function redireccionar() {
                                window.location = "../../Views/pages/index.php";
                            }
                            setTimeout("redireccionar()", 3000);
                        </script>
                    <?php
            }else{
                $queryAsistencia = mysqli_query($conn, "SELECT tdatosalumnos.Codigo FROM `tusuarios` 
                                                        INNER JOIN tdatosalumnos ON tusuarios.id = tdatosalumnos.TUsuarios_id
                                                        WHERE tdatosalumnos.TTurnos_id = 2 AND tusuarios.Estatus = true ");
    
                while ($data_asistencia = mysqli_fetch_array($queryAsistencia)) {
                    $insertar = "INSERT INTO `tbitacorasalumnosdia`(`id`, `Codigo`, `FHoraAsistencia`, `Falta`, `DesFalta`) VALUES 
                        (NULL,
                        $data_asistencia[Codigo],
                        DEFAULT,
                        0,
                        'Inasistencia'
                        )";
                        $query=mysqli_query($conn, $insertar);
                }
                echo '------------------------------------------------, Se ha generado la lista de Asistencias Vespertinas de manera exitosa';
                ?>
                <script language="JavaScript">
                    function redireccionar() {
                        window.location = "../../Views/pages/index.php";
                    }
                    setTimeout("redireccionar()", 3000);
                </script>
                <?php
            }
            
        }else if($turno == 3){
            if ($consulta3 > 0) {
                echo '------------------------------------------------, Solo puede generar una lista de Asistencias Mixtas por día';
                    ?>
                        <script language="JavaScript">
                            function redireccionar() {
                                window.location = "../../Views/pages/index.php";
                            }
                            setTimeout("redireccionar()", 3000);
                        </script>
                    <?php
            }else{
                $queryAsistencia = mysqli_query($conn, "SELECT tdatosalumnos.Codigo FROM `tusuarios` 
                                                        INNER JOIN tdatosalumnos ON tusuarios.id = tdatosalumnos.TUsuarios_id
                                                        WHERE tdatosalumnos.TTurnos_id = 3 AND tusuarios.Estatus = true
                                                         ");
    
                while ($data_asistencia = mysqli_fetch_array($queryAsistencia)) {
                    $insertar = "INSERT INTO `tbitacorasalumnosdia`(`id`, `Codigo`, `FHoraAsistencia`, `Falta`, `DesFalta`) VALUES 
                        (NULL,
                        $data_asistencia[Codigo],
                        DEFAULT,
                        0,
                        'Inasistencia'
                        )";
                        $query=mysqli_query($conn, $insertar);
                }
                echo '------------------------------------------------, Se ha generado la lista de Asistencias Mixtas de manera exitosa';
                ?>
                <script language="JavaScript">
                    function redireccionar() {
                        window.location = "../../Views/pages/index.php";
                    }
                    setTimeout("redireccionar()", 3000);
                </script>
                <?php
            }
            
        }
    }


?>