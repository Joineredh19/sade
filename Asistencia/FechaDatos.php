<?php 
/*=================================================================================================================================================*/
date_default_timezone_set("America/Mexico_City");
$fecha_hoy = date('Y-m-d');
				
/*------------Validar datos de entrada alumnos------------*/
	$query_entrada = mysqli_query($conn, "SELECT FHoraEntrada, Codigo FROM tbitacorasalumnos 
											WHERE Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
		$result_entrada = mysqli_num_rows($query_entrada);
	    $data_entrada = mysqli_fetch_assoc($query_entrada);
		if (isset($data_entrada['FHoraEntrada'])) {
			$F_registro_entrada = date('Y-m-d', strtotime($data_entrada['FHoraEntrada']));
		}else{
			$F_registro_entrada = date('1970-01-01');
		}

	$query_entrada2 = mysqli_query($conn, "SELECT FHoraEntrada, Codigo FROM tbitacorasalumnos 
												WHERE FHoraEntrada IS NOT NULL AND Codigo = '$Codigo'");
		$result_entrada2 = mysqli_num_rows($query_entrada2);
	$query_entrada3 = mysqli_query($conn, "SELECT FHoraEntrada, Codigo FROM tbitacorasalumnos 
											    WHERE DATE(FHoraEntrada) = DATE(NOW()) AND Codigo = '$Codigo'");
		$result_entrada3 = mysqli_num_rows($query_entrada3);
/*-----------------------------------------------*/

/*------------Validar datos de salida alumnos------------*/
	$query_salida = mysqli_query($conn, "SELECT FHoraSalida, Codigo FROM tbitacorasalumnos 
											    WHERE Codigo = '$Codigo' ORDER BY FHoraSalida DESC LIMIT 1");
		$result_salida = mysqli_num_rows($query_salida);
		$data_salida = mysqli_fetch_assoc($query_salida);
		if (isset($data_salida['FHoraSalida'])) {
			$F_registro_salida = date('Y-m-d', strtotime($data_salida['FHoraSalida']));
		}else{
			$F_registro_salida = date('1970-01-01');
	    }
						
	$query_salida2 = mysqli_query($conn, "SELECT FHoraSalida, Codigo FROM tbitacorasalumnos 
											WHERE FHoraSalida IS NOT NULL AND Codigo = '$Codigo'");
		$result_salida2 = mysqli_num_rows($query_salida2);
	$query_salida3 = mysqli_query($conn, "SELECT FHoraSalida, Codigo FROM tbitacorasalumnos 
											WHERE DATE(FHoraSalida) = DATE(NOW()) AND Codigo = '$Codigo'");
		$result_salida3 = mysqli_num_rows($query_salida3);
/*-----------------------------------------------*/


/*=================================================================================================================================================*/


/*------------Validar datos de entrada trabajador------------*/
	$query_entrada_trabajador = mysqli_query($conn, "SELECT FHoraEntrada, Codigo FROM tbitacorastrabajadores 
														WHERE Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
		$result_entrada_trabajador = mysqli_num_rows($query_entrada_trabajador);
		$data_entrada_trabajador = mysqli_fetch_assoc($query_entrada_trabajador);
		if (isset($data_entrada_trabajador['FHoraEntrada'])) {
			$F_registro_entrada2 = date('Y-m-d', strtotime($data_entrada_trabajador['FHoraEntrada']));
		}else{
			$F_registro_entrada2 = date('1970-01-01');
		}

	$query_entrada_trabajador2 = mysqli_query($conn, "SELECT FHoraEntrada, Codigo FROM tbitacorastrabajadores 
														WHERE FHoraEntrada IS NOT NULL AND Codigo = '$Codigo'");
		$result_entrada_trabajador2 = mysqli_num_rows($query_entrada_trabajador2);
	$query_entrada_trabajador3 = mysqli_query($conn, "SELECT FHoraEntrada, Codigo FROM tbitacorastrabajadores 
														WHERE DATE(FHoraEntrada) = DATE(NOW()) AND Codigo = '$Codigo'");
		$result_entrada_trabajador3 = mysqli_num_rows($query_entrada_trabajador3);
/*-----------------------------------------------*/

/*------------Validar datos de salida trabajador------------*/
	$query_salida_trabajador = mysqli_query($conn, "SELECT FHoraSalida, Codigo FROM tbitacorastrabajadores 
											            WHERE Codigo = '$Codigo' ORDER BY FHoraSalida DESC LIMIT 1");
		$result_salida_trabajador = mysqli_num_rows($query_salida_trabajador);
		$data_salida_trabajador = mysqli_fetch_assoc($query_salida_trabajador);
		if (isset($data_salida_trabajador['FHoraSalida'])) {
			$F_registro_salida2 = date('Y-m-d', strtotime($data_salida_trabajador['FHoraSalida']));
		}else{
			$F_registro_salida2 = date('1970-01-01');
		}
						
	$query_salida_trabajador2 = mysqli_query($conn, "SELECT FHoraSalida, Codigo FROM tbitacorastrabajadores 
														WHERE FHoraSalida IS NOT NULL AND Codigo = '$Codigo'");
		$result_salida_trabajador2 = mysqli_num_rows($query_salida_trabajador2);
	$query_salida_trabajador3 = mysqli_query($conn, "SELECT FHoraSalida, Codigo FROM tbitacorastrabajadores 
																WHERE DATE(FHoraSalida) = DATE(NOW()) AND Codigo = '$Codigo'");
		$result_salida_trabajador3 = mysqli_num_rows($query_salida_trabajador3);
/*-----------------------------------------------*/


/*=================================================================================================================================================*/


/*------------Validar datos de entrada visitantes------------*/
    $query_entrada_visitante = mysqli_query($conn, "SELECT FHoraEntrada, Codigo FROM tbitacorasvisitantes 
                                                        WHERE Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
        $result_entrada_visitante = mysqli_num_rows($query_entrada_visitante);
        $data_entrada_visitante = mysqli_fetch_assoc($query_entrada_visitante);
        if (isset($data_entrada_visitante['FHoraEntrada'])) {
            $F_registro_entrada3 = date('Y-m-d', strtotime($data_entrada_visitante['FHoraEntrada']));
        }else{
            $F_registro_entrada3 = date('1970-01-01');
        }

    $query_entrada_visitante2 = mysqli_query($conn, "SELECT FHoraEntrada, Codigo FROM tbitacorasvisitantes 
                                                        WHERE FHoraEntrada IS NOT NULL AND Codigo = '$Codigo'");
        $result_entrada_visitante2 = mysqli_num_rows($query_entrada_visitante2);
    $query_entrada_visitante3 = mysqli_query($conn, "SELECT FHoraEntrada, Codigo FROM tbitacorasvisitantes 
                                                        WHERE DATE(FHoraEntrada) = DATE(NOW()) AND Codigo = '$Codigo'");
        $result_entrada_visitante3 = mysqli_num_rows($query_entrada_visitante3);
/*-----------------------------------------------*/

/*------------Validar datos de salida visitantes------------*/
    $query_salida_visitante = mysqli_query($conn, "SELECT FHoraSalida, Codigo FROM tbitacorasvisitantes 
                                                        WHERE Codigo = '$Codigo' ORDER BY FHoraSalida DESC LIMIT 1");
        $result_salida_visitante = mysqli_num_rows($query_salida_visitante);
        $data_salida_visitante = mysqli_fetch_assoc($query_salida_visitante);
        if (isset($data_salida_visitante['FHoraSalida'])) {
            $F_registro_salida3 = date('Y-m-d', strtotime($data_salida_visitante['FHoraSalida']));
        }else{
            $F_registro_salida3 = date('1970-01-01');
        }

    $query_salida_visitante2 = mysqli_query($conn, "SELECT FHoraSalida, Codigo FROM tbitacorasvisitantes 
                                                        WHERE FHoraSalida IS NOT NULL AND Codigo = '$Codigo'");
        $result_salida_visitante2 = mysqli_num_rows($query_salida_visitante2);
    $query_salida_visitante3 = mysqli_query($conn, "SELECT FHoraSalida, Codigo FROM tbitacorasvisitantes 
                                                        WHERE DATE(FHoraSalida) = DATE(NOW()) AND Codigo = '$Codigo'");
        $result_salida_visitante3 = mysqli_num_rows($query_salida_visitante3);
/*-----------------------------------------------*/

/*=================================================================================================================================================*/
?>