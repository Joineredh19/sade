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
	class TutorPadreModel
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
				$revisartutorp = mysqli_query($conn, "SELECT TUsuarios_id FROM ttutorespadres WHERE TUsuarios_id = $Id");
				$consultartutorp = mysqli_num_rows($revisartutorp);

				if($consultartutorp > 0){
					$actualizar = ("UPDATE ttutorespadres SET CalleyNum = ?, TUsuarios_id = ?, TColonias_id = ? WHERE TUsuarios_id = $Id");
					$stm2 = $this->pdo->prepare($actualizar)->execute(array($Calleynum,$Id,$Selecolonia));
					if($stm2){
						return true;
					} else {
						return false;
					}
				}else{
					$sql = ("INSERT INTO ttutorespadres ( CalleyNum,TUsuarios_id,TColonias_id) VALUES (?,?,?)");
					$stm = $this->pdo->prepare($sql)->execute(array($Calleynum,$Id,$Selecolonia));
					if($stm){
						return true;
					} else {
						return false;
					}
				}
			} catch (Exception $e) {
				die($e->getMessage()." ->TutorPadreModel->CompletarInfo()");
			}
		}





    }
	?>