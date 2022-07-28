<?php 	session_start(); 
?>
<?php 
function Conexion(){

    // $serverName = "127.0.0.1";
   //  $connectionOptions = array("Database"=>"sade22","Uid"=>"root", "PWD"=>"", "CharacterSet"=>"UTF-8");
   $conn = mysqli_connect("softwarela.com.mx",
   "softwa60_sade22", "Sade2022*", "softwa60_sade22");
 //  mysqli_connect($serverName, $connectionOptions);
     return $conn;
 

   
}
	$conn = Conexion();
    $turno = $_POST['SelectTurno'];
	echo($turno);
	if($turno==1){
		
		$result = mysqli_query($conn,'SELECT tdatosalumnos.codigo
		FROM tusuarios INNER JOIN tdatosalumnos ON tusuarios.id = tdatosalumnos.TUsuarios_id INNER JOIN tturnos ON tdatosalumnos.TTurnos_id = tturnos.id 
		WHERE tdatosalumnos.TTurnos_id = 1');
		$listas= array();


		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			printf (" Codigo: %s", $row["codigo"]);
			//echo($row["codigo"]);
		$codigos = explode('codigo'. ' =>' .',', $row['codigo']);
		$listas["Codigo"] = $codigos;
		}
		
		//echo json_encode($listas);
	$result2 = mysqli_query($conn,'SELECT codigo FROM tbitacorasalumnos');
		$listasBitacoras= array();
		while ($row = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
			$codigos2 = explode('codigo'. ' =>' .',', $row['codigo']);
			$listasBitacoras["Codigo"] = $codigos2;
		}
		//echo json_encode($listasBitacoras);

		$resultado = array_diff_assoc($listas, $listasBitacoras);

		$userObj = (object) $resultado;
		$json =  json_encode($userObj);
		echo $json;
		//print_r(json_decode($json));
		//$jsone = (json_decode($json));


		if($resultado==0){
			echo("no hay registros");
		}else{
		//	print_r($resultado);
		//	$array_Insertar = ;
		//	$array_Insertar = json_decode(json_encode($resultado));

			//echo json_decode($array_Insertar);
			foreach ($userObj as $row) {
				$codigo = $row[0];
				//var_dump($row[0]);
				$sql = "INSERT INTO tinasistencias (codigo) VALUES ('$codigo')";
        		$conn->query($sql);
			}
		/*	for ($i = 0; $i< count($resultado); $i++ ){
				$codigoInsertar = $array_Insertar[count($resultado)];
				echo($array_Insertar);
				$sql = "INSERT INTO tinasistencias (codigo) VALUES ('$codigoInsertar')";
        		$conn->query($sql);
			}*/
			if ($conn->query($sql) === TRUE) {
				echo "se ha guardado correctamente";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			

		}
		//var_dump($listasBitacoras);

	}}


		/*
		try{
			$ArrayUsuario = array();
			$stm = $this->pdo->prepare("SELECT tusuarios.id, tusuarios.Nombres,tdatosalumnos.codigo,tturnos.Turno
			FROM tusuarios INNER JOIN tdatosalumnos ON tusuarios.id = tdatosalumnos.TUsuarios_id INNER JOIN tturnos ON tdatosalumnos.TTurnos_id = tturnos.id 
			WHERE Turno = 'Matutino'");
			$stm->execute(array());
			foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
				$entity = new DatosAlumnos();
				$entity->__SET('Codigo',$r->codigo);
							
				$ArrayUsuario[] = $entity;
			}
		//return $Array;
			$ArrayBitacora = array();
			$stm = $this->pdo->prepare("SELECT codigo FROM tbitacorasalumnos");

			$stm->execute(array());
			foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
				$entity = new BitacorasAlumnos();
				$entity->__SET('Codigo',$r->codigo);			
				$ArrayBitacora[] = $entity;
			}
			//return $Array;
		$result=array_diff($ArrayUsuario,$ArrayBitacora);
		foreach ($result as $cod){
		$sql = "INSERT INTO tinasistencias (codigo) VALUES (?)";
		$stm = $this->pdo->prepare($sql)->execute(array($cod));
		}
	}catch(Exception $e){
		die($e->getMessage()." ->AlumnoModel->Ver()");
	}
			return 1;*/

	

	
?>