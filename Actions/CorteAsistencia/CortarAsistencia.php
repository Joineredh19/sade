<?php 	session_start(); 
?>
<?php 
function Conexion(){

    // $serverName = "127.0.0.1";
   //  $connectionOptions = array("Database"=>"sade22","Uid"=>"root", "PWD"=>"", "CharacterSet"=>"UTF-8");
   $conn = mysqli_connect("cuc-udg22.mysql.database.azure.com",
   "SADE22@cuc-udg22", "Sade_2022", "bzya6emoafjbqjkolhiy");
 //  mysqli_connect($serverName, $connectionOptions);
    // return $conn;
 

   
}
	$conn = Conexion();
    $turno = $_POST['SelectTurno'];
	echo($turno);
	if($turno==1){
		
		$result = mysqli_query($conn,'SELECT tdatosalumnos.codigo
		FROM tusuarios INNER JOIN tdatosalumnos ON tusuarios.id = tdatosalumnos.TUsuarios_id INNER JOIN tturnos ON tdatosalumnos.TTurnos_id = tturnos.id 
		WHERE tdatosalumnos.TTurnos_id = 1');
		$listas= array();
		while ($row = mysqli_fetch_array($result)) {
			echo($row["codigo"]);
		//$listas .=  $row["codigo"];
	
			//echo($listas);
		}
	}



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