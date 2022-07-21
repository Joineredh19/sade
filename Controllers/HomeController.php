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

		//Informacion de Usuario en General
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

		public function  ActualizarPass($id,$NewPass){
			$model = new UsuarioModel();
			$var = $model->ActualizarPass($id,$NewPass);
			return $var;
		}

		


		//Informacion De Rol de Alumno

		public function vistaalumnos(){
			$model = new UsuarioModel;
			$var = $model->vistaalumnos();
			return $var;
		}

		public function CompletarAlumnos($Id, $Codigo,$NSeguroSocial,$Rfc,$Curp,$TipoSangre,$Alergia,$Selecolonia,$Calleynum,$Seletutoraca,$Selepadre,$Seleturno)
		{
			$model = new AlumnoModel();
			$var = $model->CompletarInfo($Id, $Codigo,$NSeguroSocial,$Rfc,$Curp,$TipoSangre,$Alergia,$Selecolonia,$Calleynum,$Seletutoraca,$Selepadre,$Seleturno);
			return $var;
		}


		//Informacion de Rol de Tutor Academico
		public function CompletarTutorAca($Id,$Selecolonia,$Calleynum)
		{
			$model = new TrabajadorModel();
			$var = $model->CompletarInfo($Id,$Selecolonia,$Calleynum);
			return $var;
		}



		//Informacion de Rol Tutor Padre

		public function CompletarTutorPadre($Id,$Selecolonia,$Calleynum)
		{
			$model = new TutorPadreModel();
			$var = $model->CompletarInfo($Id,$Selecolonia,$Calleynum);
			return $var;
		}
		public function ListarUsuario_tutor($id){
			$model = new UsuarioModel ();
			$var = $model -> ListarUsuario_tutor($id);
			return $var;
		}
		public function ListarUsuario_Padre($id){
			$model = new UsuarioModel ();
			$var = $model -> ListarUsuario_Padre($id);
			return $var;
		}
		public function vistaalumnos_tutor(){
			$model = new UsuarioModel ();
			$var = $model -> vistaalumnos_tutor();
			return $var;
		}
		public function obtener_id_tutor($id){
			$model = new UsuarioModel($id);
			$var = $model -> obtener_id_tutor($id);
			return $var;
		}

		public function mandarTurnoReporte($turno){
			//echo ("el usuario es: ".$turno);
			$model = new AlumnoModel($turno);
			$var = $model -> mandarTurnoReporte($turno);
			return $var;
		}


	}