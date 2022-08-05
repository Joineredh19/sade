<script>
	function ConfirmacionInhabilitar(){
		if (confirm("¿Deseas inhabilitar los registros de asistencias, inasistencias y atendidos?")) {
			return true;
		}return false;
	}
</script>
<?php
date_default_timezone_set("America/Mexico_City");
$fecha_hoy = date('Y-m-d');


/*---------------------- Habilitar Registros ----------------------*/
if (isset($_POST['HabilitarIna'])) {
    $FechaInicio = $_POST['FechaStartHab'];
    $FechaFinal = $_POST['FechaEndHab'];
        
    $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET 
                                        `EstatusReg`= 1,
                                        `DesEstatusReg`= 'Habilitado' 
                                        WHERE FHoraAsistencia BETWEEN date('$FechaInicio') AND date('$FechaFinal')
                                        ");

    $actualizar2 = mysqli_query($conn, "UPDATE `tbitacorasalumnos` SET 
                                        `EstatusReg`= 1,
                                        `DesEstatusReg`= 'Habilitado' 
                                        WHERE FHoraEntrada BETWEEN date('$FechaInicio') AND date('$FechaFinal')"
                                        );
    
    $msg->success('Registros Habilitados');
?>
    <script language="JavaScript">
    	function redireccionar() {
        	window.location = "../../Views/pages/inasistencias.php";
    	}
    	setTimeout("redireccionar()", 1000);
	</script>
<?php
}
/*-------------------- Fin Habilitar Registros --------------------*/


/*---------------------- Inhabilitar Registros ----------------------*/
if (isset($_POST['InhabilitarIna'])) {
    $actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET 
                                        `EstatusReg`= NULL,
                                        `DesEstatusReg`='Inhabilitado' 
                                        WHERE date(FHoraAsistencia) < date('$fecha_hoy')"
                                        );

    $actualizar2 = mysqli_query($conn, "UPDATE `tbitacorasalumnos` SET 
                                        `EstatusReg`= NULL,
                                        `DesEstatusReg`='Inhabilitado' 
                                        WHERE date(FHoraEntrada) < date('$fecha_hoy')"
                                        );
    
    $msg->success('Registros Inhabilitados');
?>
    <script language="JavaScript">
    	function redireccionar() {
        	window.location = "../../Views/pages/inasistencias.php";
    	}
    	setTimeout("redireccionar()", 1000);
	</script>
<?php
}
/*-------------------- Fin Inhabilitar Registros --------------------*/
?>
