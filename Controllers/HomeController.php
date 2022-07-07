<?php 
spl_autoload_register(function($nombreClase)
{
	//require_once '../../Models/Entity/' .$nombreClase. '.php';
	require_once '../../Models/' .$nombreClase. '.php';
	 //require_once '../../Models/COM.php';}
	// require_once '../../Lib/dompdf/autoload.inc.php';
});



	class HomeController
	{
		private $model;

		public function __CONSTRUCT() {
		}

		public function AgregarUsuario($RolesId,$Nombres,$Apellidos,$Email,$Telefono,$Status,$Contrasenia,$generoId,$Fnto)
		{
			$model = new UsuarioModel();
			$var = $model->Agregar($RolesId,$Nombres,$Apellidos,$Email,$Telefono,$Status,$Contrasenia,$generoId,$Fnto);
			return $var;
		}

		public function VerUsuario($Email){
			$model = new UsuarioModel();
			$var = $model->VerUsuario($Email);
			return $var;
		}

		public function  VerUsuarioxId($id){
			$model = new UsuarioModel();
			$var = $model->VerUsuarioxId($id);
			return $var;
		}
		public function  VerUsuarioxRol($id){
			$model = new UsuarioModel();
			$var = $model->VerUsuarioxRol($id);
			return $var;
		}

		public function  ListarUsuario(){
			$model = new UsuarioModel();
			$var = $model->ListarUsuario();
			return $var;
		}

		public function vistaalumnos(){
			$model = new UsuarioModel;
			$var = $model->vistaalumnos();
			return $var;
		}

		public function AgregarDatosAlumno()
		{
			$model = new UsuarioModel();
			$var = $model->Agregar();
			return $var;
		}
		public function AgregarDatosTrabajador()
		{
			$model = new UsuarioModel();
			$var = $model->Agregar();
			return $var;
		}
		public function AgregarDatos()
		{
			$model = new UsuarioModel();
			$var = $model->Agregar();
			return $var;
		}
	}