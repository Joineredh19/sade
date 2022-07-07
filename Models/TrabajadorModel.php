<?php

require_once('../../Models/Conexion/Conexion.php');
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
		

        public function CompletarTutorAca($Calleynum,$Id,$Selecolonia)
		{
			try {
				$sql = ("INSERT INTO ttutoresacademicos (CalleyNum,TUsuarios_id, TColonias_id) VALUES (?,?,?)");
				$stm = $this->pdo->prepare($sql)->execute(array($Calleynum,$Id,$Selecolonia));
				if($stm){
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				die($e->getMessage()." ->TrabajadorModel->CompletarInfo()");
			}
		}





    }
	?>