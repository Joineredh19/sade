<?php

require_once('../../Models/Conexion/Conexion.php');
	/**
	* 
	*/
	class AlumnoModel
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
		

        public function CompletarInfo($Id, $Codigo,$NSeguroSocial,$Rfc,$Curp,$TipoSangre,$Alergia,$Selecolonia,$Calleynum,$Seletutoraca,$Selepadre,$Seleturno)
		{
			try {
				$sql = ("INSERT INTO tusuarios (Codigo, CalleyNum, NSeguroSocial, RFC, Curp,TipoSangre, Alergia,TTutoresAcademicos_id, TTutoresPadres_id,TColonias_id,TTurnos_id,TCalendariosIngresos_id,TUsuarios_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
				$stm = $this->pdo->prepare($sql)->execute(array($Codigo,$Calleynum,$NSeguroSocial,$Rfc,$Curp,$TipoSangre,$Alergia,$Seletutoraca,$Selepadre,$Selecolonia,$Seleturno,1,$Id));
				if($stm){
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				die($e->getMessage()." ->AlumnoModel->CompletarInfo()");
			}
		}





    }
	?>