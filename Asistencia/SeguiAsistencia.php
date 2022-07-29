<?php
if(empty($_REQUEST['id'])){
    header("location: ../../Views/pages/inasistencias.php");
} else{
    $id = $_REQUEST['id'];

    $query_alumno = mysqli_query($conn, "SELECT id, Codigo, FHoraAsistencia, Falta, DesFalta, Aptitud, DesAptitud, Aprovechamiento, DesAprovechamiento FROM `tbitacorasalumnosdia` 
                                            WHERE id = $id");
    $result_alumno = mysqli_num_rows($query_alumno);
    $data = mysqli_fetch_assoc($query_alumno);
} 
     
    if (isset($_POST["SeguiAsistencia"])) {

        if(isset($_POST["Aptitud"])){
            $Aptitud = $_POST["Aptitud"];
        }else{
            $Aptitud = NULL;
        }
        
        if(isset($_POST["Aprovechamiento"])){
            $Aprovechamiento = $_POST["Aprovechamiento"];
        }else{
            $Aprovechamiento = NULL;
        }
        
        $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Falta` = '2',
                                        `DesFalta` = 'Atendido'
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");

/*=================================== Campo Aptitud ===================================*/
        if($Aptitud == 0) {
            $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aptitud`='$Aptitud',
										`DesAptitud`='Mala Conducta'
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");
        }else if($Aptitud == 1){
            $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aptitud`='$Aptitud',
										`DesAptitud`='Regular Conducta'
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");
        }else if($Aptitud == 2){
            $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aptitud`='$Aptitud',
										`DesAptitud`='Buena Conducta'
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");
        }else if($Aptitud == 3){
            $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aptitud`='$Aptitud',
										`DesAptitud`='Excelente Conducta'
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");
        }else{
            $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aptitud`='$Aptitud',
										`DesAptitud`= NULL
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");
        }
/*=================================== Fin campo aptitud ===================================*/


/*=================================== Campo Aprovechamiento ===================================*/
        if($Aprovechamiento == 0) {
            $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aprovechamiento`='$Aprovechamiento',
										`DesAprovechamiento`='Mal Aprovechamiento'
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");
        }else if($Aprovechamiento == 1){
            $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aprovechamiento`='$Aprovechamiento',
										`DesAprovechamiento`='Regular Aprovechamiento'
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");
        }else if($Aprovechamiento == 2){
            $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aprovechamiento`='$Aprovechamiento',
										`DesAprovechamiento`='Buen Aprovechamiento'
									WHERE
                                        id = $id;   
										/*id = '$data[id]';*/
										");
        }else if($Aprovechamiento == 3){
            $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aprovechamiento`='$Aprovechamiento',
										`DesAprovechamiento`='Excelente Aprovechamiento'
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");
        }else{
             $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Aprovechamiento`='$Aprovechamiento',
										`DesAprovechamiento`= NULL
									WHERE
                                        id = $id;
										/*id = '$data[id]';*/
										");
        }
/*=================================== Fin campo aprovechamiento ===================================*/

        $msg->success('Asistencia actualizada con exito');
        $msg->display();
        ?>
            <script language="JavaScript">
    			function redireccionar() {
        			window.location = "../../Views/pages/inasistencias.php";
    			}
    			setTimeout("redireccionar()", 2000);
			</script>
        <?php
    }
?>