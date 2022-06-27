<?php 
	session_start ();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registro de entrada de alumnos</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_registro.css">
</head>
<body>

	<?php 
		if (isset($_POST["enviar"])) {
			$Codigoasis=$_POST["Codigoasis"];
			$Codigosalida=$_POST["Codigoasis"];

			require_once("Conexion2.php");

			/*------------Validar datos de alumno------------*/
			$query_alumno = mysqli_query($conexion, "SELECT Codigo FROM alumnos WHERE Codigo = '".$Codigoasis."'");
				$result_alumno = mysqli_num_rows($query_alumno);
				$data_alumno = mysqli_fetch_assoc($query_alumno);
			/*-----------------------------------------------*/

			if($result_alumno < 1){

				echo "<h2 class='registrado2'> No se encuentra registrado en la base de datos </h2>";

			}else{
				$fecha_hoy = date('Y-m-d');

				/*------------Validar datos de entrada------------*/
				$query_entrada = mysqli_query($conexion, "SELECT FH_entrada, Codigoasis FROM alumnos_entrada 
																	WHERE Codigoasis = '$Codigoasis' ORDER BY FH_entrada DESC LIMIT 1");
						$result_entrada = mysqli_num_rows($query_entrada);
						$data_entrada = mysqli_fetch_assoc($query_entrada);
						if (isset($data_entrada['FH_entrada'])) {
							$F_registro_entrada = date('Y-m-d', strtotime($data_entrada['FH_entrada']));
						}else{
							$F_registro_entrada = date('1970-01-01');
						}

				$query_entrada2 = mysqli_query($conexion, "SELECT FH_entrada, Codigoasis FROM alumnos_entrada WHERE Codigoasis = '$Codigoasis'");
						$result_entrada2 = mysqli_num_rows($query_entrada2);
				$query_entrada3 = mysqli_query($conexion, "SELECT FH_entrada, Codigoasis FROM alumnos_entrada 
																	WHERE DATE(FH_entrada) = DATE(NOW()) AND Codigoasis = '$Codigoasis'");
						$result_entrada3 = mysqli_num_rows($query_entrada3);
				/*-----------------------------------------------*/

				/*------------Validar datos de salida------------*/
				$query_salida = mysqli_query($conexion, "SELECT FH_salida, Codigosalida FROM alumnos_salida 
																	WHERE Codigosalida = '$Codigosalida' ORDER BY FH_salida DESC LIMIT 1");
						$result_salida = mysqli_num_rows($query_salida);
						$data_salida = mysqli_fetch_assoc($query_salida);
						if (isset($data_salida['FH_salida'])) {
							$F_registro_salida = date('Y-m-d', strtotime($data_salida['FH_salida']));
						}else{
							$F_registro_salida = date('1970-01-01');
						}
						
				$query_salida2 = mysqli_query($conexion, "SELECT FH_salida, Codigosalida FROM alumnos_salida WHERE Codigosalida = '$Codigoasis'");
						$result_salida2 = mysqli_num_rows($query_salida2);
				$query_salida3 = mysqli_query($conexion, "SELECT FH_salida, Codigosalida FROM alumnos_salida 
																	WHERE DATE(FH_salida) = DATE(NOW()) AND Codigosalida = '$Codigoasis'");
						$result_salida3 = mysqli_num_rows($query_salida3);
				/*-----------------------------------------------*/
				
				if (empty($data_entrada['FH_entrada']) && empty($data_salida['FH_salida']) ) {
					$insertar="INSERT INTO `alumnos_entrada`(`id`, `Codigoasis`, `FH_entrada`) VALUES 
							( NULL,
							 '$Codigoasis',
							 DEFAULT
							)";
							$query=mysqli_query($conexion, $insertar);
		
							echo "<h2 class='registrado'>Registrado con exito la asistencia de entrada</h2>";

				}else if ($fecha_hoy == $F_registro_entrada && $fecha_hoy == $F_registro_salida OR $fecha_hoy == $F_registro_entrada) {
						
						if ($result_entrada3 == $result_salida3) {
	
							$insertar="INSERT INTO `alumnos_entrada`(`id`, `Codigoasis`, `FH_entrada`) VALUES 
							( NULL,
							 '$Codigoasis',
							 DEFAULT
							)";
							$query=mysqli_query($conexion, $insertar);
		
							echo "<h2 class='registrado'>Registrado con exito la asistencia de entrada</h2>";
	
						}else{
		
							if($result_entrada3 > $result_salida3){
		
								$insertar2="INSERT INTO `alumnos_salida`(`id`, `Codigosalida`, `FH_salida`) VALUES 
								( NULL,
								 '$Codigosalida',
								 DEFAULT
								)";
								$query=mysqli_query($conexion, $insertar2);
		
								echo "<h2 class='registrado'>Registrado con exito la asistencia de salida</h2>";
		
							}
		
						}
					}else if($fecha_hoy > $F_registro_entrada && $fecha_hoy > $F_registro_salida OR $fecha_hoy > $F_registro_entrada){

						if ($result_entrada2 == $result_salida2) {
	
							$insertar="INSERT INTO `alumnos_entrada`(`id`, `Codigoasis`, `FH_entrada`) VALUES 
							( NULL,
							 '$Codigoasis',
							 DEFAULT
							)";
							$query=mysqli_query($conexion, $insertar);
		
							echo "<h2 class='registrado'>Registrado con exito la asistencia de entrada</h2>";
		
						}else if ($result_entrada2 > $result_salida2) {
	
							$insertar="INSERT INTO `alumnos_entrada`(`id`, `Codigoasis`, `FH_entrada`) VALUES 
							( NULL,
							 '$Codigoasis',
							 DEFAULT
							)";
							$query=mysqli_query($conexion, $insertar);
		
							echo "<h2 class='registrado'>Registrado con exito la asistencia de entrada</h2>";
		
						}

				}
			
			}
	}
	?>

	<form action="#" method="POST">
		<fieldset>
				<table>
				<tr>
					<h3 id="Titulo">Registre su asistencia</h3>		
				</tr>
				<tr>
					<td><label>Codigo:</label></td>
					<td><input type="number" required placeholder="Ingrese su codigo de alumno" id="Codigoasis" name="Codigoasis"></td>
				</tr>			
				<tr>
					<td colspan="2" id="boton_registrar"><input type="submit" value="Registrar" name="enviar"></td>
				</tr>
			</table>
		</fieldset>
    </form>
</body>
</html>