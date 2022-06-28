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

		public function AgregarUsuario($RolesId,$Nombres,$Apellidos,$Email,$Telefono,$Status,$Contrasenia,$generoId)
		{
			$model = new UsuarioModel();
			$var = $model->Agregar($RolesId,$Nombres,$Apellidos,$Email,$Telefono,$Status,$Contrasenia,$generoId);
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
	}