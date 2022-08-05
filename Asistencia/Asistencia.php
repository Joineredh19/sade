<?php
		function Conexion(){
			$conn = mysqli_connect("softwarela.com.mx",
  			"softwa60_sade22", "Sade2022*", "softwa60_sade22");
		 
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

/*=================================================================================================================================================*/

			/*------------Validar datos de alumno------------*/
			$query_alumno = mysqli_query($conn, "SELECT Codigo, Falta FROM `tbitacorasalumnosdia` WHERE DATE(FHoraAsistencia) = DATE(NOW()) AND Codigo = '$Codigo'");
				$result_alumno = mysqli_num_rows($query_alumno);
				$data_alumno = mysqli_fetch_assoc($query_alumno);
			$query_alumno2 = mysqli_query($conn, "SELECT Codigo FROM `tdatosalumnos` WHERE Codigo = '$Codigo'");
				$data_alumno2 = mysqli_fetch_assoc($query_alumno2);
			/*-----------------------------------------------*/

			/*------------Validar datos de trabajador------------*/
			$query_trabajador = mysqli_query($conn, "SELECT Codigo FROM `tdatostrabajadores` WHERE Codigo = '$Codigo'");
				$result_trabajador = mysqli_num_rows($query_trabajador);
				$data_trabajador = mysqli_fetch_assoc($query_trabajador);
			/*-----------------------------------------------*/

/*=================================================================================================================================================*/

			if($result_alumno < 1 && $result_trabajador < 1){

				if(isset($data_alumno2['Codigo'])){
					$msg->error('Aún no se ha generado la lista de asistencias!');
					$msg->display();
				}else if(!isset($data_alumno2['Codigo']) OR !isset($data_trabajador['Codigo'])){
					$msg->error('No se encuentra registrado en la base de datos!');
					$msg->display();
				}
			?>
				<script language="JavaScript">
    				function redireccionar() {
        				window.location = "../../Views/pages/login.php";
    				}
    				setTimeout("redireccionar()", 3000);
				</script>
			<?php
				
			}else{
				require_once 'FechaDatos.php';				

				if (isset($data_alumno['Codigo'])) {

					if (empty($data_entrada['FHoraEntrada'])) {
					
						$insertar="INSERT INTO `tbitacorasalumnos`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`, `EstatusReg`, `DesEstatusReg`) VALUES 
								( NULL,
								 '$Codigo',
								 CURRENT_TIMESTAMP,
								 '$ObservacionEntrada',
								 1,
								 'Habilitado'
								)";
								$query=mysqli_query($conn, $insertar);
						
								if(isset($data_alumno['Codigo']) && $data_alumno['Falta'] == 0){
									$query_entrada4 = mysqli_query($conn, "SELECT id, Codigo, Falta, DesFalta FROM tbitacorasalumnosdia 
																		WHERE DATE(FHoraAsistencia) = DATE(NOW()) AND Codigo = '$Codigo' ORDER BY FHoraAsistencia DESC LIMIT 1");
									$data_entrada4 = mysqli_fetch_assoc($query_entrada4);
	
									$actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Falta`= 1,
										`DesFalta` = 'Asistencia'
									WHERE
										id = '$data_entrada4[id]';
									");
								}
	
								$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																			INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																			INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id
																			INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																			WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
								$dato_registro = mysqli_fetch_assoc($query);
								$H_registro_entrada = date('H:i:s', strtotime($dato_registro['FHoraEntrada']));

								$msg->success('Registrado con exito la asistencia de entrada ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_entrada.')');
								$msg->display();
							?>
								<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">

								<script language="JavaScript">
    								function redireccionar() {
        							window.location = "../../Views/pages/login.php";
    							}
    								setTimeout("redireccionar()", 3000);
								</script>
							<?php
	
					}else if ($fecha_hoy == $F_registro_entrada && $fecha_hoy == $F_registro_salida OR $fecha_hoy == $F_registro_entrada) {
							
						if ($result_entrada3 == $result_salida3) {
		
								$insertar="INSERT INTO `tbitacorasalumnos`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`, `EstatusReg`, `DesEstatusReg`) VALUES 
								( NULL,
								 '$Codigo',
								 CURRENT_TIMESTAMP,
								 '$ObservacionEntrada',
								 1,
								 'Habilitado'
								)";
								$query=mysqli_query($conn, $insertar);

								if(isset($data_alumno['Codigo']) && $data_alumno['Falta'] == 0){
									$query_entrada4 = mysqli_query($conn, "SELECT id, Codigo, Falta, DesFalta FROM tbitacorasalumnosdia 
																		WHERE DATE(FHoraAsistencia) = DATE(NOW()) AND Codigo = '$Codigo' ORDER BY FHoraAsistencia DESC LIMIT 1");
									$data_entrada4 = mysqli_fetch_assoc($query_entrada4);
	
									$actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Falta`= 1,
										`DesFalta` = 'Asistencia'
									WHERE
										id = '$data_entrada4[id]';
									");
								}
	
								$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																			INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																			INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id
																			INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																			WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
								$dato_registro = mysqli_fetch_assoc($query);
								$H_registro_entrada = date('H:i:s', strtotime($dato_registro['FHoraEntrada']));

								$msg->success('Registrado con exito la asistencia de entrada ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_entrada.')');
								$msg->display();
							?>
								<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">
							
								<script language="JavaScript">
    								function redireccionar() {
        								window.location = "../../Views/pages/login.php";
    								}
    									setTimeout("redireccionar()", 3000);
								</script>
							<?php
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
									
									$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																			INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																			INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id
																			INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																			WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
								$dato_registro = mysqli_fetch_assoc($query);
								$H_registro_entrada = date('H:i:s', strtotime($dato_registro['FHoraEntrada']));

								$msg->success('Registrado con exito la asistencia de salida ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_entrada.')');
								$msg->display();	
								?>
									<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">
								
									<script language="JavaScript">
    									function redireccionar() {
        									window.location = "../../Views/pages/login.php";
    									}
    										setTimeout("redireccionar()", 3000);
									</script>
								<?php
								}
			
						}
					}else if($fecha_hoy > $F_registro_entrada && $fecha_hoy > $F_registro_salida OR $fecha_hoy > $F_registro_entrada){
	
							if ($result_entrada2 == $result_salida2) {
		
								$insertar="INSERT INTO `tbitacorasalumnos`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`, `EstatusReg`, `DesEstatusReg`) VALUES 
								( NULL,
								 '$Codigo',
								 CURRENT_TIMESTAMP,
								 '$ObservacionEntrada',
								 1,
								 'Habilitado'
								)";
								$query=mysqli_query($conn, $insertar);

								if(isset($data_alumno['Codigo']) && $data_alumno['Falta'] == 0){
									$query_entrada4 = mysqli_query($conn, "SELECT id, Codigo, Falta, DesFalta FROM tbitacorasalumnosdia 
																		WHERE DATE(FHoraAsistencia) = DATE(NOW()) AND Codigo = '$Codigo' ORDER BY FHoraAsistencia DESC LIMIT 1");
									$data_entrada4 = mysqli_fetch_assoc($query_entrada4);
	
									$actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Falta`= 1,
										`DesFalta` = 'Asistencia'
									WHERE
										id = '$data_entrada4[id]';
									");
								}
	
								$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																			INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																			INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id
																			INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																			WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
								$dato_registro = mysqli_fetch_assoc($query);
								$H_registro_entrada = date('H:i:s', strtotime($dato_registro['FHoraEntrada']));

								$msg->success('Registrado con exito la asistencia de entrada ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_entrada.')');
								$msg->display();
							?>
								<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">
							
								<script language="JavaScript">
    								function redireccionar() {
        								window.location = "../../Views/pages/login.php";
    								}
    									setTimeout("redireccionar()", 3000);
								</script>
							<?php
			
							}else if ($result_entrada2 > $result_salida2) {
		
								$insertar="INSERT INTO `tbitacorasalumnos`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`, `EstatusReg`, `DesEstatusReg`) VALUES 
								( NULL,
								 '$Codigo',
								 CURRENT_TIMESTAMP,
								 '$ObservacionEntrada',
								 1,
								 'Habilitado'
								)";
								$query=mysqli_query($conn, $insertar);

								if(isset($data_alumno['Codigo']) && $data_alumno['Falta'] == 0){
									$query_entrada4 = mysqli_query($conn, "SELECT id, Codigo, Falta, DesFalta FROM tbitacorasalumnosdia 
																		WHERE DATE(FHoraAsistencia) = DATE(NOW()) AND Codigo = '$Codigo' ORDER BY FHoraAsistencia DESC LIMIT 1");
									$data_entrada4 = mysqli_fetch_assoc($query_entrada4);
	
									$actualizar = mysqli_query($conn, "UPDATE `tbitacorasalumnosdia` SET
										`Falta`= 1,
										`DesFalta` = 'Asistencia'
									WHERE
										id = '$data_entrada4[id]';
									");
								}
	
								$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatosalumnos.Codigo, tbitacorasalumnos.FHoraEntrada FROM tbitacorasalumnos 
																			INNER JOIN tdatosalumnos ON tdatosalumnos.Codigo = tbitacorasalumnos.Codigo 
																			INNER JOIN tusuarios ON tusuarios.id = tdatosalumnos.TUsuarios_id
																			INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																			WHERE tbitacorasalumnos.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
								$dato_registro = mysqli_fetch_assoc($query);
								$H_registro_entrada = date('H:i:s', strtotime($dato_registro['FHoraEntrada']));

								$msg->success('Registrado con exito la asistencia de entrada ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_entrada.')');
								$msg->display();
							?>
								<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">
							
								<script language="JavaScript">
    								function redireccionar() {
        								window.location = "../../Views/pages/login.php";
    								}
    									setTimeout("redireccionar()", 3000);
								</script>
							<?php
			
							}
					}else{
						$msg->error('No se realizó la asistencia!');
						$msg->display();

						?>
							<script language="JavaScript">
    							function redireccionar() {
        							window.location = "../../Views/pages/login.php";
    							}
    								setTimeout("redireccionar()", 3000);
							</script>
						<?php
					}
				
				}else if(isset($data_trabajador['Codigo'])) {
				
						if (empty($data_entrada_trabajador['FHoraEntrada'])) {
						
							$insertar="INSERT INTO `tbitacorastrabajadores`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
									( NULL,
									 '$Codigo',
									 DEFAULT,
									 '$ObservacionEntrada'
									)";
									$query=mysqli_query($conn, $insertar);
		
									$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatostrabajadores.Codigo, tbitacorastrabajadores.FHoraEntrada FROM tbitacorastrabajadores 
																				INNER JOIN tdatostrabajadores ON tdatostrabajadores.Codigo = tbitacorastrabajadores.Codigo 
																				INNER JOIN tusuarios ON tusuarios.id = tdatostrabajadores.TUsuarios_id 
																				INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																				WHERE tbitacorastrabajadores.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
									$dato_registro = mysqli_fetch_assoc($query);
									$H_registro_entrada = date('H:i:s', strtotime($dato_registro['FHoraEntrada']));
	
									$msg->success('Registrado con exito la asistencia de entrada ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_entrada.')');
									$msg->display();
								?>
									<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">
								
									<script language="JavaScript">
    									function redireccionar() {
        									window.location = "../../Views/pages/login.php";
    									}
    										setTimeout("redireccionar()", 3000);
									</script>
								<?php
		
						}else if ($fecha_hoy == $F_registro_entrada2 && $fecha_hoy == $F_registro_salida2 OR $fecha_hoy == $F_registro_entrada2) {
								
							if ($result_entrada_trabajador3 == $result_salida_trabajador3) {
			
									$insertar="INSERT INTO `tbitacorastrabajadores`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
									( NULL,
									 '$Codigo',
									 DEFAULT,
									 '$ObservacionEntrada'
									)";
									$query=mysqli_query($conn, $insertar);
		
									$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatostrabajadores.Codigo, tbitacorastrabajadores.FHoraEntrada FROM tbitacorastrabajadores 
																				INNER JOIN tdatostrabajadores ON tdatostrabajadores.Codigo = tbitacorastrabajadores.Codigo 
																				INNER JOIN tusuarios ON tusuarios.id = tdatostrabajadores.TUsuarios_id 
																				INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																				WHERE tbitacorastrabajadores.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
									$dato_registro = mysqli_fetch_assoc($query);
									$H_registro_entrada = date('H:i:s', strtotime($dato_registro['FHoraEntrada']));
	
									$msg->success('Registrado con exito la asistencia de entrada ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_entrada.')');
									$msg->display();
								?>
									<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">
								
									<script language="JavaScript">
    									function redireccionar() {
        									window.location = "../../Views/pages/login.php";
    									}
    										setTimeout("redireccionar()", 3000);
									</script>
								<?php
			
							}else{
				
								if($result_entrada_trabajador3 > $result_salida_trabajador3){
		
										$query_entrada4 = mysqli_query($conn, "SELECT id, FHoraEntrada, ObservacionSalida, Codigo FROM tbitacorastrabajadores 
																			WHERE DATE(FHoraEntrada) = DATE(NOW()) AND Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
										$data_entrada4 = mysqli_fetch_assoc($query_entrada4);
		
										$actualizar = mysqli_query($conn, "UPDATE `tbitacorastrabajadores` SET
											`Codigo`='$Codigo',
											`ObservacionSalida`='$ObservacionSalida',
											`FHoraSalida`= CURRENT_TIMESTAMP
										WHERE
											id = '$data_entrada4[id]';
											");
										
										$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatostrabajadores.Codigo, tbitacorastrabajadores.FHoraSalida FROM tbitacorastrabajadores 
																				INNER JOIN tdatostrabajadores ON tdatostrabajadores.Codigo = tbitacorastrabajadores.Codigo 
																				INNER JOIN tusuarios ON tusuarios.id = tdatostrabajadores.TUsuarios_id 
																				INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																				WHERE tbitacorastrabajadores.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
										$dato_registro = mysqli_fetch_assoc($query);
										$H_registro_salida = date('H:i:s', strtotime($dato_registro['FHoraSalida']));
	
										$msg->success('Registrado con exito la asistencia de salida ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_salida.')');
										$msg->display();
									?>
										<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">
									
										<script language="JavaScript">
    										function redireccionar() {
        										window.location = "../../Views/pages/login.php";
    										}
    											setTimeout("redireccionar()", 3000);
										</script>
									<?php

								}
				
							}
						}else if($fecha_hoy > $F_registro_entrada2 && $fecha_hoy > $F_registro_salida2 OR $fecha_hoy > $F_registro_entrada2){
		
							if ($result_entrada_trabajador2 == $result_salida_trabajador2) {
			
									$insertar="INSERT INTO `tbitacorastrabajadores`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
									( NULL,
									 '$Codigo',
									 DEFAULT,
									 '$ObservacionEntrada'
									)";
									$query=mysqli_query($conn, $insertar);
		
									$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatostrabajadores.Codigo, tbitacorastrabajadores.FHoraEntrada FROM tbitacorastrabajadores 
																				INNER JOIN tdatostrabajadores ON tdatostrabajadores.Codigo = tbitacorastrabajadores.Codigo 
																				INNER JOIN tusuarios ON tusuarios.id = tdatostrabajadores.TUsuarios_id 
																				INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																				WHERE tbitacorastrabajadores.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
									$dato_registro = mysqli_fetch_assoc($query);
									$H_registro_entrada = date('H:i:s', strtotime($dato_registro['FHoraEntrada']));
	
									$msg->success('Registrado con exito la asistencia de entrada ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_entrada.')');
									$msg->display();
								?>
									<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">
								
									<script language="JavaScript">
    									function redireccionar() {
        									window.location = "../../Views/pages/login.php";
    									}
    										setTimeout("redireccionar()", 3000);
									</script>
								<?php
				
							}else if ($result_entrada_trabajador2 > $result_salida_trabajador2) {
			
									$insertar="INSERT INTO `tbitacorastrabajadores`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
									( NULL,
									 '$Codigo',
									 DEFAULT,
									 '$ObservacionEntrada'
									)";
									$query=mysqli_query($conn, $insertar);
		
									$query=mysqli_query($conn, "SELECT tusuarios.Nombres, tusuarios.Imagen, troles.Rol, tdatostrabajadores.Codigo, tbitacorastrabajadores.FHoraEntrada FROM tbitacorastrabajadores 
																				INNER JOIN tdatostrabajadores ON tdatostrabajadores.Codigo = tbitacorastrabajadores.Codigo 
																				INNER JOIN tusuarios ON tusuarios.id = tdatostrabajadores.TUsuarios_id 
																				INNER JOIN troles ON troles.id = tusuarios.TRoles_id 
																				WHERE tbitacorastrabajadores.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
									$dato_registro = mysqli_fetch_assoc($query);
									$H_registro_entrada = date('H:i:s', strtotime($dato_registro['FHoraEntrada']));
	
									$msg->success('Registrado con exito la asistencia de entrada ('.$dato_registro["Rol"].') ('. $dato_registro["Nombres"].') ('. $H_registro_entrada.')');
									$msg->display();
								?>
									<img src="data:img/jpg;base64,<?php echo base64_encode($dato_registro['Imagen'])?>" style="width:20%; height:auto;">
								
									<script language="JavaScript">
    									function redireccionar() {
        									window.location = "../../Views/pages/login.php";
    									}
    										setTimeout("redireccionar()", 3000);
									</script>
								<?php
				
							}
						}else{
							$msg->error('No se realizó la asistencia!');
							$msg->display();
						
							?>
								<script language="JavaScript">
    								function redireccionar() {
        								window.location = "../../Views/pages/login.php";
    								}
    									setTimeout("redireccionar()", 3000);
								</script>
							<?php
						}

				}else{
					$msg->error('No se realizó la asistencia!');
					$msg->display();
				}
			
			}
		}


/*=================================================================================================================================================*/

		else if(isset($_POST["registrar"])){
			$Codigo=$_POST["IngreseINE"];

			if(isset($_POST["IngreseNombre"]) && isset($_POST["IngreseApellidos"]) && isset($_POST["ATrabajo"])){
				$Nombre=$_POST["IngreseNombre"];
				$Apellidos=$_POST["IngreseApellidos"];
				$Email=$_POST["IngreseEmail"];
				$Telefono=$_POST["IngreseTele"];
				$TAreasTRabajo_id=$_POST["ATrabajo"];
			}

			if(isset($_POST["observaciones"])){
				$ObservacionSalida=$_POST["observaciones"];
			}

			require_once("../../Config/Conexion.config.php");

/*=================================================================================================================================================*/

			/*------------Validar datos de visitante------------*/
			$query_visitante = mysqli_query($conn, "SELECT Codigo FROM `tvisitantes` WHERE Codigo = '$Codigo'");
				$result_visitante = mysqli_num_rows($query_visitante);
				$data_visitante = mysqli_fetch_assoc($query_visitante);
			/*-----------------------------------------------*/

/*=================================================================================================================================================*/
			if($result_visitante < 1 && isset($_POST["IngreseNombre"]) && isset($_POST["IngreseApellidos"]) && isset($_POST["ATrabajo"])){
				$insertar="INSERT INTO `tvisitantes`(`id`, `Codigo`, `Nombres`, `Apellidos`, `Email`, `Telefono`, `TAreasTRabajo_id`) VALUES 
				(NULL,
				'$Codigo',
				'$Nombre',
				'$Apellidos',
				'$Email',
				'$Telefono',
				'$TAreasTRabajo_id'
				)";
				$query=mysqli_query($conn, $insertar);
				
				$insertar2="INSERT INTO `tbitacorasvisitantes`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
				( NULL,
				'$Codigo',
				DEFAULT,
				NULL
				)";
				$query=mysqli_query($conn, $insertar2);
	
				$query=mysqli_query($conn, "SELECT tvisitantes.Nombres, tvisitantes.Codigo, tbitacorasvisitantes.FHoraEntrada FROM tbitacorasvisitantes 
												INNER JOIN tvisitantes ON tvisitantes.Codigo = tbitacorasvisitantes.Codigo 
												WHERE tvisitantes.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
				$dato_registro = mysqli_fetch_assoc($query);
	
				$msg->success('Bienvenido(a) ('. $dato_registro["Nombres"].'), su entrada se registró con exito');
				$msg->display();

				?>
					<script language="JavaScript">
    					function redireccionar() {
        					window.location = "../../Views/pages/login.php";
    					}
    						setTimeout("redireccionar()", 3000);
					</script>
				<?php
	
			}else{
				require_once 'FechaDatos.php';

				if ($fecha_hoy == $F_registro_entrada3 && $fecha_hoy == $F_registro_salida3 OR $fecha_hoy == $F_registro_entrada3) {
							
					if ($result_entrada_visitante3 == $result_salida_visitante3 && isset($_POST["IngreseNombre"]) && isset($_POST["IngreseApellidos"]) && isset($_POST["ATrabajo"])) {
		
						$insertar="INSERT INTO `tvisitantes`(`id`, `Codigo`, `Nombres`, `Apellidos`, `Email`, `Telefono`, `TAreasTRabajo_id`) VALUES 
						(NULL,
						'$Codigo',
						'$Nombre',
						'$Apellidos',
						'$Email',
						'$Telefono',
						'$TAreasTRabajo_id'
						)";
						$query=mysqli_query($conn, $insertar);
							
						$insertar2="INSERT INTO `tbitacorasvisitantes`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
						( NULL,
						'$Codigo',
						DEFAULT,
						NULL
						)";
						$query=mysqli_query($conn, $insertar2);
	
						$query=mysqli_query($conn, "SELECT tvisitantes.Nombres, tvisitantes.Codigo, tbitacorasvisitantes.FHoraEntrada FROM tbitacorasvisitantes 
														INNER JOIN tvisitantes ON tvisitantes.Codigo = tbitacorasvisitantes.Codigo 
														WHERE tvisitantes.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
						$dato_registro = mysqli_fetch_assoc($query);
								
						$msg->success('Bienvenido(a) ('. $dato_registro["Nombres"].'), su entrada se registró con exito');
						$msg->display();

						?>
							<script language="JavaScript">
    							function redireccionar() {
        							window.location = "../../Views/pages/login.php";
    							}
    								setTimeout("redireccionar()", 3000);
							</script>
						<?php
		
					}else{
			
						if($result_entrada_visitante3 > $result_salida_visitante3){
	
							$query_entrada4 = mysqli_query($conn, "SELECT id, FHoraEntrada, ObservacionSalida, Codigo FROM tbitacorasvisitantes 
																		WHERE DATE(FHoraEntrada) = DATE(NOW()) AND Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
								$data_entrada4 = mysqli_fetch_assoc($query_entrada4);
	
								$actualizar = mysqli_query($conn, "UPDATE `tbitacorasvisitantes` SET
									`Codigo`='$Codigo',
									`ObservacionSalida`='$ObservacionSalida',
									`FHoraSalida`= CURRENT_TIMESTAMP
								WHERE
									id = '$data_entrada4[id]';
									");
									
							$query=mysqli_query($conn, "SELECT tvisitantes.Nombres, tvisitantes.Codigo, tbitacorasvisitantes.FHoraEntrada FROM tbitacorasvisitantes 
															INNER JOIN tvisitantes ON tvisitantes.Codigo = tbitacorasvisitantes.Codigo 
															WHERE tvisitantes.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
							$dato_registro = mysqli_fetch_assoc($query);
									
							$msg->success('Gracias por su visita ('. $dato_registro["Nombres"].'), su salida se registró con exito');
							$msg->display();

							?>
								<script language="JavaScript">
    								function redireccionar() {
        								window.location = "../../Views/pages/login.php";
    								}
    									setTimeout("redireccionar()", 3000);
								</script>
							<?php
			
						}else{
							$msg->error('No cuenta con un registro de entrada!');
							$msg->display();

						?>
							<script language="JavaScript">
    							function redireccionar() {
        							window.location = "../../Views/pages/login.php";
    							}
    								setTimeout("redireccionar()", 3000);
							</script>
						<?php
						}
					}
				}else if($fecha_hoy > $F_registro_entrada3 && $fecha_hoy > $F_registro_salida3 OR $fecha_hoy > $F_registro_entrada3){
	
					if ($result_entrada_visitante2 == $result_salida_visitante2 && isset($_POST["IngreseNombre"]) && isset($_POST["IngreseApellidos"]) && isset($_POST["ATrabajo"])) {
		
						$insertar="INSERT INTO `tvisitantes`(`id`, `Codigo`, `Nombres`, `Apellidos`, `Email`, `Telefono`, `TAreasTRabajo_id`) VALUES 
						(NULL,
						'$Codigo',
						'$Nombre',
						'$Apellidos',
						'$Email',
						'$Telefono',
						'$TAreasTRabajo_id'
						)";
						$query=mysqli_query($conn, $insertar);
							
						$insertar2="INSERT INTO `tbitacorasvisitantes`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
						( NULL,
						'$Codigo',
						DEFAULT,
						NULL
						)";
						$query=mysqli_query($conn, $insertar2);
	
						$query=mysqli_query($conn, "SELECT tvisitantes.Nombres, tvisitantes.Codigo, tbitacorasvisitantes.FHoraEntrada FROM tbitacorasvisitantes 
														INNER JOIN tvisitantes ON tvisitantes.Codigo = tbitacorasvisitantes.Codigo 
														WHERE tvisitantes.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
						$dato_registro = mysqli_fetch_assoc($query);
	
						$msg->success('Bienvenido(a) ('. $dato_registro["Nombres"].'), su entrada se registró con exito');
						$msg->display();

						?>
							<script language="JavaScript">
    							function redireccionar() {
        							window.location = "../../Views/pages/login.php";
    							}
    								setTimeout("redireccionar()", 3000);
							</script>
						<?php
			
					}else if ($result_entrada_visitante2 > $result_salida_visitante2 && isset($_POST["IngreseNombre"]) && isset($_POST["IngreseApellidos"]) && isset($_POST["ATrabajo"])) {
		
						$insertar="INSERT INTO `tvisitantes`(`id`, `Codigo`, `Nombres`, `Apellidos`, `Email`, `Telefono`, `TAreasTRabajo_id`) VALUES 
						(NULL,
						'$Codigo',
						'$Nombre',
						'$Apellidos',
						'$Email',
						'$Telefono',
						'$TAreasTRabajo_id'
						)";
						$query=mysqli_query($conn, $insertar);
							
						$insertar2="INSERT INTO `tbitacorasvisitantes`(`id`, `Codigo`, `FHoraEntrada`, `ObservacionEntrada`) VALUES 
						( NULL,
						'$Codigo',
						DEFAULT,
						NULL
						)";
						$query=mysqli_query($conn, $insertar2);
						
						$query=mysqli_query($conn, "SELECT tvisitantes.Nombres, tvisitantes.Codigo, tbitacorasvisitantes.FHoraEntrada FROM tbitacorasvisitantes 
														INNER JOIN tvisitantes ON tvisitantes.Codigo = tbitacorasvisitantes.Codigo 
														WHERE tvisitantes.Codigo = '$Codigo' ORDER BY FHoraEntrada DESC LIMIT 1");
						$dato_registro = mysqli_fetch_assoc($query);
						
						$msg->success('Bienvenido(a) ('. $dato_registro["Nombres"].'), su entrada se registró con exito');
						$msg->display();

						?>
							<script language="JavaScript">
    							function redireccionar() {
        							window.location = "../../Views/pages/login.php";
    							}
    								setTimeout("redireccionar()", 3000);
							</script>
						<?php
			
					}else{
						$msg->error('No cuenta con un registro de entrada!');
						$msg->display();

						?>
							<script language="JavaScript">
    							function redireccionar() {
        							window.location = "../../Views/pages/login.php";
    							}
    								setTimeout("redireccionar()", 3000);
							</script>
						<?php
					}
				}else{
						$msg->error('No se realizó el registro!');
						$msg->display();

						?>
							<script language="JavaScript">
    							function redireccionar() {
        							window.location = "../../Views/pages/login.php";
    							}
    								setTimeout("redireccionar()", 3000);
							</script>
						<?php
				}
			}
		}
?>