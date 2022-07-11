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
					$entity->__SET('id',$r->id);
					$entity->__SET('Email',$r->Email);
					$entity->__SET('contrasenia',$r->contrasenia);
					$entity->__SET('Nombres',$r->Nombres);
					$entity->__SET('Apellidos',$r->Apellidos);
					
				
					return $entity;

				}
				return NULL;
			}catch(Exception $e){
				die($e->getMessage()." ->UsuarioModel->Ver()");
			}
		}

		public function VerUsuarioxId($id)
		{
			try{
				$stm = $this->pdo->prepare("SELECT * FROM tusuarios WHERE id = ?");
				$stm->execute(array($id));
				$r = $stm->fetch(PDO::FETCH_OBJ);

				if ($r) {
					$entity = new Usuarios();
					$entity->__SET('id',$r->id);
					$entity->__SET('Nombres',$r->Nombres);
					$entity->__SET('Apellidos',$r->Apellidos);
					$entity->__SET('Email',$r->Email);
					$entity->__SET('Telefono',$r->Telefono);
					$entity->__SET('TRoles_id',$r->TRoles_id);
					$entity->__SET('tgeneros_id',$r->tgeneros_id);
					$entity->__SET('contrasenia',$r->contrasenia);
					

					return $entity;

				}
				return NULL;
			}catch(Exception $e){
				die($e->getMessage()." ->UsuarioModel->Ver()");
			}
		}

		public function VerUsuarioxRol($id)
		{
			try{
				$stm = $this->pdo->prepare("SELECT * FROM tusuarios WHERE id = ?");
				$stm->execute(array($id));
				$r = $stm->fetch(PDO::FETCH_OBJ);

				if ($r) {
					$entity = new Usuarios();
					$entity->__SET('id',$r->id);
					$entity->__SET('Nombres',$r->Nombres);
					$entity->__SET('Apellidos',$r->Apellidos);
					$entity->__SET('Email',$r->Email);
					$entity->__SET('Telefono',$r->Telefono);
					$entity->__SET('TRoles_id',$r->TRoles_id);
					$entity->__SET('tgeneros_id',$r->tgeneros_id);
					$entity->__SET('contrasenia',$r->contrasenia);
					

					return $entity;

				}
				return NULL;
			}catch(Exception $e){
				die($e->getMessage()." ->UsuarioModel->Ver()");
			}
		}


		public function ListarUsuario()
		{
			try{
				$Array = array();
				$stm = $this->pdo->prepare("SELECT tusuarios.id,tusuarios.Nombres, tusuarios.Apellidos, tusuarios.Email, tusuarios.Telefono, tgeneros.genero,troles.rol,tusuarios.TRoles_id
				FROM  tusuarios  INNER JOIN tgeneros ON tusuarios.tgeneros_id = tgeneros.id  INNER JOIN troles ON tusuarios.TRoles_id = troles.id  
				WHERE troles_id = 4 or troles_id = 5 or troles_id = 6 ORDER BY tusuarios.id  ASC ");
				$stm->execute(array());

				foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
					
					$entity = new Usuarios();
					$entity->__SET('id',$r->id);
					$entity->__SET('Nombres',$r->Nombres);
					$entity->__SET('Apellidos',$r->Apellidos);
					$entity->__SET('Email',$r->Email);
					$entity->__SET('Telefono',$r->Telefono);
					$entity->__SET('rol',$r->rol);
					$entity->__SET('genero',$r->genero);
					
					
					
					$Array[] = $entity;
				}
				return $Array;
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

		public function Agregar($RolesId,$Nombres,$Apellidos,$Email,$Telefono,$Status,$Contrasenia,$generoId,$Fnto)
		{
			try {
				$sql = ("INSERT INTO tusuarios (Nombres, Apellidos, Email, Telefono, estatus,FechaNacimiento, Contrasenia,TRoles_id,tgeneros_id) VALUES (?,?,?,?,?,?,?,?,?)");
				$stm = $this->pdo->prepare($sql)->execute(array($Nombres,$Apellidos,$Email,$Telefono,$Status,$Fnto,$Contrasenia,$RolesId,$generoId));
				if($stm){
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				die($e->getMessage()." ->UsuarioModel->Agregar()");
			}
		}
		function obtener_id_tutor($id){
			try{
				$Array = array();
				$HomeController = new HomeController();
				$stm = $this->pdo->prepare("select id from ttutoresacademicos where TUsuarios_id = ?");
				$stm->execute(array($id));
				$r = $stm->fetch(PDO::FETCH_OBJ);
				$entity = new TutoresAcademicos;
				$entity->__SET('id',$r->id);
				return $entity;
			}catch(Exception $e){
				die($e->getMessage()." ->UsuarioModel->Ver()");
			}
		}
		public function ListarUsuario_tutor()
		{
			try{
				$Array = array();
				$stm = $this->pdo->prepare("SELECT tusuarios.id,tusuarios.Nombres, tusuarios.Apellidos, tusuarios.Email, tusuarios.Telefono, tgeneros.genero,troles.rol,tusuarios.TRoles_id,tdatosalumnos.TTutoresAcademicos_id,tdatosalumnos.TTutoresPadres_id
				FROM  tusuarios INNER JOIN tgeneros ON tusuarios.tgeneros_id = tgeneros.id  INNER JOIN troles ON tusuarios.TRoles_id = troles.id join tdatosalumnos on tusuarios.id = tdatosalumnos.TUsuarios_id ");
				$stm->execute(array());

				foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
					
					$entity = new Usuarios();
					$entity->__SET('id',$r->id);
					$entity->__SET('Nombres',$r->Nombres);
					$entity->__SET('Apellidos',$r->Apellidos);
					$entity->__SET('Email',$r->Email);
					$entity->__SET('Telefono',$r->Telefono);
					$entity->__SET('rol',$r->rol);
					$entity->__SET('genero',$r->genero);
					$entity->__SET('TTutoresAcademicos_id',$r->TTutoresAcademicos_id);
					$entity->__SET('TTutoresPadres_id',$r->TTutoresPadres_id);
									
					$Array[] = $entity;

				}
				return $Array;
			}catch(Exception $e){
				die($e->getMessage()." ->UsuarioModel->Ver()");
			}
		}
		function vistaalumnos_tutor(){
			$HomeController = new HomeController();?>
			<?php foreach ($HomeController->ListarUsuario_tutor() as $key){ ?>
			  <?php if ($key->_GET('TTutoresAcademicos_id')==$_SESSION['id_tutor']||$key->_GET('TTutoresPadres_id')==$_SESSION['id_tutor']){?>
				<tr>
				  <td align="center"><?= $key->__GET('id') ?></td>
				  <td align="center"><?= $key->__GET('Nombres') ?></td>
				  <td  align="center"><?= $key->__GET('Apellidos') ?></td>
				  <td  align="center"><?= $key->__GET('Email') ?></td>
				  <td  align="center"><?= $key->__GET('Telefono') ?></td>
				  <td  align="center"><?= $key->__GET('genero') ?></td>
				  <td  align="center"><?= $key->__GET('rol') ?></td>
				  <td align="center" style="padding: 0;"> <a href="completarinfo.php?IdUsuario=<?= $key->__GET('id') ?>" target="_blank" title="Completar Información" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
				<tr>
			  <?php };?>
			  <?php };?>
		  <?php	}
		 
		function vistaalumnos(){
			$HomeController = new HomeController();?>
			<?php foreach ($HomeController->ListarUsuario() as $key){ ?>
			  <?php if ($key->__GET('rol')=="Estudiante"){?>
				<tr>
				  <td align="center"><?= $key->__GET('id') ?></td>
				  <td align="center"><?= $key->__GET('Nombres') ?></td>
				  <td  align="center"><?= $key->__GET('Apellidos') ?></td>
				  <td  align="center"><?= $key->__GET('Email') ?></td>
				  <td  align="center"><?= $key->__GET('Telefono') ?></td>
				  <td  align="center"><?= $key->__GET('genero') ?></td>
				  <td  align="center"><?= $key->__GET('rol') ?></td>
				  <td align="center" style="padding: 0;"> <a href="completarinfo.php?IdUsuario=<?= $key->__GET('id') ?>" target="_blank" title="Completar Información" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
				<tr>
			  <?php };?>
			  <?php };?>
		  <?php	}

		}
	
	?>