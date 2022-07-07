<?php

require_once('../../Models/Conexion/Conexion.php');
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
                $sql = ("INSERT INTO ttutorespadres ( CalleyNum,TUsuarios_id,TColonias_id) VALUES (?,?,?)");
				$stm = $this->pdo->prepare($sql)->execute(array($Calleynum,$Id,$Selecolonia));
				if($stm){
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				die($e->getMessage()." ->TutorPadreModel->CompletarInfo()");
			}
		}





    }
	?>