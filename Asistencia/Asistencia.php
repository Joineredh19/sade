<?php
		function Conexion(){
			$conn = mysqli_connect("bzya6emoafjbqjkolhiy-mysql.services.clever-cloud.com",
     		"ud5ggwh0iuxsr8up", "SttfR9Di2pih75lEFuum", "bzya6emoafjbqjkolhiy");
		 
			 return $conn;
		 }
		 $conn = Conexion();

		require '../../Lib/FlashMessages.php';
		if (!session_id()) @session_start();
		$msg = new \Plasticbrain\FlashMessages\FlashMessages();
		 
		if (isset($_POST["enviar"])) {
			$Codigo=$_POST["email_tel"];
			$ObservacionEntrada=$_POST["observaciones"];
			$ObservacionSalida=$_POST["observaciones"];

			require_once("../../Config/Conexion.config.php");

			/*------------Validar datos de alumno------------*/
			$query_alumno = mysqli_query($conn, "SELECT Codigo FROM `tdatosalumnos` WHERE Codigo = '$Codigo'");
				$result_alumno = mysqli_num_rows($query_alumno);
				$data_alumno = mysqli_fetch_assoc($query_alumno);
			/*-----------------------------------------------*/

			if($result_alumno < 1){
				$msg->error('No se encuentra registrado en la base de datos!');
				$msg->display();

			}else{
				$fecha_hoy = date('Y-m-d');

				/*------------Validar datos de entrada------------*/
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

				/*------------Validar datos de salida------------*/
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
				

				if (empty($data_entrada['FHoraEntrada'])) {
					
					$insertar="INSERT INTO `tbitacorasalumnos`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
							( NULL,
							 '$Codigo',
							 DEFAULT,
							 '$ObservacionEntrada'
							)";
							$query=mysqli_query($conn, $insertar);

							$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																		INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																		INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id 
																		WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
							$dato_registro = mysqli_fetch_assoc($query);

							$msg->success('Registrado con exito la asistencia de entrada ('. $dato_registro["Nombres"].')');
							$msg->display();

				}else if ($fecha_hoy == $F_registro_entrada && $fecha_hoy == $F_registro_salida OR $fecha_hoy == $F_registro_entrada) {
						
						if ($result_entrada3 == $result_salida3) {
	
							$insertar="INSERT INTO `tbitacorasalumnos`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
							( NULL,
							 '$Codigo',
							 DEFAULT,
							 '$ObservacionEntrada'
							)";
							$query=mysqli_query($conn, $insertar);

							$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																		INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																		INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id 
																		WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
							$dato_registro = mysqli_fetch_assoc($query);
							
							$msg->success('Registrado con exito la asistencia de entrada ('. $dato_registro["Nombres"].')');
							$msg->display();
	
						}else{
		
							if($result_entrada3 > $result_salida3){

								$query_entrada4 = mysqli_query($conn, "SELECT id, FHoraEntrada, ObservacionSalida, Codigo FROM tbitacorasalumnos 
																	WHERE DATE(FHoraEntrada) = DATE(NOW()) AND Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
								$data_entrada4 = mysqli_fetch_assoc($query_entrada4);

								$actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnos` SET
									`Codigo`='$Codigo',
									`ObservacionSalida`='$ObservacionSalida',
									`FHoraSalida`= CURRENT_TIMESTAMP
								WHERE
									id = '$data_entrada4[id]';
									");
								
								$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																		INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																		INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id 
																		WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
								$dato_registro = mysqli_fetch_assoc($query);
								
								$msg->success('Registrado con exito la asistencia de salida ('. $dato_registro["Nombres"].')');
								$msg->display();
		
							}
		
						}
					}else if($fecha_hoy > $F_registro_entrada && $fecha_hoy > $F_registro_salida OR $fecha_hoy > $F_registro_entrada){

						if ($result_entrada2 == $result_salida2) {
	
							$insertar="INSERT INTO `tbitacorasalumnos`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
							( NULL,
							 '$Codigo',
							 DEFAULT,
							 '$ObservacionEntrada'
							)";
							$query=mysqli_query($conn, $insertar);

							$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																		INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																		INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id 
																		WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
							$dato_registro = mysqli_fetch_assoc($query);

							$msg->success('Registrado con exito la asistencia de entrada ('. $dato_registro["Nombres"].')');
							$msg->display();
		
						}else if ($result_entrada2 > $result_salida2) {
	
							$insertar="INSERT INTO `tbitacorasalumnos`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
							( NULL,
							 '$Codigo',
							 DEFAULT,
							 '$ObservacionEntrada'
							)";
							$query=mysqli_query($conn, $insertar);

							$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																		INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																		INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id 
																		WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
							$dato_registro = mysqli_fetch_assoc($query);
							
							$msg->success('Registrado con exito la asistencia de entrada ('. $dato_registro["Nombres"].')');
							$msg->display();
		
						}

				}else{
					$msg->error('No se realizó la asistencia');
					$msg->display();
				}
			
			}
	}
?>