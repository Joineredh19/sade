<?php

require_once('../../Models/Conexion/Conexion.php');

function Conexion(){
	$conn = mysqli_connect("softwarela.com.mx",
	  "softwa60_sade22", "Sade2022*", "softwa60_sade22");
 
	return $conn;
}
	/**
	* 
	*/
	class TrabajadorModel
	{
		private $pdo;

		public function __CONSTRUCT()
		{
			try {
				$this->pdo = Conexion::Conectar();
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}
		

        public function CompletarInfo($Calleynum,$Id,$Selecolonia)
		{
			try {
				$conn = Conexion();
				$revisartutora = mysqli_query($conn, "SELECT TUsuarios_id FROM ttutoresacademicos WHERE TUsuarios_id = $Id");
				$consultartutora = mysqli_num_rows($revisartutora);

				if($consultartutora > 0){
					$actualizar = ("UPDATE ttutoresacademicos SET CalleyNum = ?, TUsuarios_id = ?, TColonias_id = ? WHERE TUsuarios_id = $Id");
					$stm2 = $this->pdo->prepare($actualizar)->execute(array($Calleynum,$Id,$Selecolonia));
					if($stm2){
						return true;
					} else {
						return false;
					}
				}else{
					$sql = ("INSERT INTO ttutoresacademicos (CalleyNum,TUsuarios_id, TColonias_id) VALUES (?,?,?)");
					$stm = $this->pdo->prepare($sql)->execute(array($Calleynum,$Id,$Selecolonia));
					if($stm){
						return true;
					} else {
						return false;
					}
				}
			} catch (Exception $e) {
				die($e->getMessage()." ->TrabajadorModel->CompletarInfo()");
			}
		}





    }
	?>