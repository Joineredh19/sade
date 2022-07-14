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
				$sql = ("INSERT INTO tdatosalumnos (Codigo, CalleyNum, NSeguroSocial, RFC, Curp,TipoSangre, Alergia,TTutoresAcademicos_id, TTutoresPadres_id,TColonias_id,TTurnos_id,TCalendariosIngresos_id,TUsuarios_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
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



		public function mandarTurnoReporte($turno){
			if($turno==1){
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
			return 1;
			}

			return 0;
		}

    }
	?>