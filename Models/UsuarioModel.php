<?php

require_once('../../Models/Conexion/Conexion.php');

	/**
	* 
	*/
	class Ota_UsuarioModel
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
		

	/*	public function Ver($IdUsuario)
		{
			try{
				$stm = $this->pdo->prepare("SELECT * FROM Usuario WHERE IdUsuario = ?");
				$stm->execute(array($IdUsuario));
				$r = $stm->fetch(PDO::FETCH_OBJ);

				if ($r) {
					$entity = new Ota_Usuario();

					$entity->__SET('IdUsuario',$r->IdUsuario);
					$entity->__SET('Us_Nom1',$r->Us_Nom1);
					$entity->__SET('Us_Nom2',$r->Us_Nom2);
					$entity->__SET('Us_Ape1',$r->Us_Ape1);
					$entity->__SET('Us_Ape2',$r->Us_Ape2);
					
					$entity->__SET('Usuario',$r->Usuario);
					$entity->__SET('Clave',$r->Clave);
				
					return $entity;

				}
				return NULL;
			}catch(Exception $e){
				die($e->getMessage()." ->Ota_UsuarioModel->Ver()");
			}
		}

		public function VerxUsuario($Usuario)
		{
			try{
				$stm = $this->pdo->prepare("SELECT * FROM Usuario WHERE Usuario = ?");
				$stm->execute(array($Usuario));
				$r = $stm->fetch(PDO::FETCH_OBJ);

				if ($r) {
					$entity = new Ota_Usuario();

					$entity->__SET('IdUsuario',$r->IdUsuario);
					$entity->__SET('Us_Nom1',$r->Us_Nom1);
					$entity->__SET('Us_Nom2',$r->Us_Nom2);
					$entity->__SET('Us_Ape1',$r->Us_Ape1);
					$entity->__SET('Us_Ape2',$r->Us_Ape2);
					
					$entity->__SET('Usuario',$r->Usuario);
					$entity->__SET('Clave',$r->Clave);
				
					return $entity;

				}
				return NULL;
			}catch(Exception $e){
				die($e->getMessage()." ->Ota_UsuarioModel->Ver()");
			}
		}

		public function Listar()
		{
			try
			{
				$Array = array();
				$stm = $this->pdo->prepare("SELECT * FROM Usuario");
				$stm->execute(array());

				foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
					$entity = new Ota_Usuario();

					$entity->__SET('IdUsuario',$r->IdUsuario);
					$entity->__SET('Us_Nom1',$r->Us_Nom1);
					$entity->__SET('Us_Nom2',$r->Us_Nom2);
					$entity->__SET('Us_Ape1',$r->Us_Ape1);
					$entity->__SET('Us_Ape2',$r->Us_Ape2);
					
					$entity->__SET('Usuario',$r->Usuario);
					$entity->__SET('Clave',$r->Clave);
					
					
					$Array[] = $entity;
				}
				return $Array;
			}catch(Exception $e){
				die($e->getMessage()." ->Ota_UsuarioModel->Listar()");
			}
		}

		public function Conteo()
		{
			try
			{
				$stm = $this->pdo->prepare("SELECT COUNT(IdUsuario) AS IdUsuario FROM Usuario");
				$stm->execute(array());
				$r = $stm->fetch(PDO::FETCH_OBJ);

				if ($r) {
					$entity = new Ota_Usuario();

					$entity->__SET('IdUsuario', $r->IdUsuario);
					return $entity;
				}
				return NULL;
			}catch(Exception $e)
			{
				die($e->getMessage()." -> Ota_UsuarioModel->Conteo()");
			}
		}
		
		public function Eliminar($IdUsuario) {
			try {
				$sql = $this->pdo->prepare("DELETE FROM Usuario WHERE IdUsuario = ?");
				$stm = $sql->execute(array($IdUsuario));
				if ($stm) {
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				die($e->getMessage()." -> Ota_UsuarioModel->Eliminar()");
			}
		}*/

		public function Agregar($Nombres,$Apellidos,$Email,$Telefono,$Status,$RolesId,$FechaAlta,$Contraseña)
		{
			try {
				$sql = ("INSERT INTO tusuarios  (Fecha1, Fecha2, Pte_NumDoc, Pte_TipoDoc, Pte_FechaNac, Pte_Edad, Pte_Ap1, Pte_Ap2, PteNom1, Pte_Nom2, Aco_Nombres, Aco_Apellidos, Aco_Documento, Aco_Perentezco, Sv_Origen, Sv_Origen1, Sv_Origen2, Sv_Origen3, Sv_Llegada, Sv_Llegada1, Sv_Llegada2, Sv_Llegada3, Sv_Salida, Sv_Salida1, Sv_Salida2, Sv_Salida3, Sv_Complejidad, Sv_TipoServicio, Sv_ExamenSolicitado, Sv_Firma_Pte2, En_Firma2, Sv_Firma_Entrega2, Ef_Ta, Ef_Fr, Ef_Temp, Ef_Glasgow, Ef_Dx1, Ef_Dx2, Ef_HallazgoPos1, Ef_Antecedentes1, Ef_Gin1, Ef_Gin2, Ef_Gin3, Ef_Gin4, Ef_Gin5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
				$stm = $this->pdo->prepare($sql)->execute(array($Nombres,$Apellidos,$Email,$Telefono,$Status,$RolesId,$FechaAlta,$Contraseña));
				if($stm){
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				die($e->getMessage()." ->UsuarioModel->Agregar()");
			}
		}
		



		}
	
	?>