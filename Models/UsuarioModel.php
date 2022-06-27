<?php

require_once('../../Models/Conexion/Conexion.php');

	/**
	* 
	*/
	class UsuarioModel
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
		*/
		public function VerUsuario($Email)
		{
			try{
				$stm = $this->pdo->prepare("SELECT * FROM tusuarios WHERE Email = ?");
				$stm->execute(array($Email));
				$r = $stm->fetch(PDO::FETCH_OBJ);

				if ($r) {
					$entity = new Usuarios();
					$entity->__SET('Email',$r->Email);
					$entity->__SET('Contrasenia',$r->Contrasenia);
					$entity->__SET('Nombres',$r->Nombres);
					$entity->__SET('Apellidos',$r->Apellidos);
					
				
					return $entity;

				}
				return NULL;
			}catch(Exception $e){
				die($e->getMessage()." ->UsuarioModel->Ver()");
			}
		}
/*
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

		public function Agregar($RolesId,$Nombres,$Apellidos,$Email,$Telefono,$Status,$Contrasenia)
		{
			try {
				$sql = ("INSERT INTO tusuarios (Nombres, Apellidos, Email, Telefono, estatus, Contrasenia,TRoles_id) VALUES (?,?,?,?,?,?,?)");
				$stm = $this->pdo->prepare($sql)->execute(array($Nombres,$Apellidos,$Email,$Telefono,"True",$Contrasenia,$RolesId));
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