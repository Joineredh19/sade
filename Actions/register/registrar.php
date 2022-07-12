<?php 
session_start();

/*if(!isset($_SESSION["Email"])){
	header("location: ../../Views/pages/login.php");
}else{*/
	require_once('../../Controllers/HomeController.php');
	$HomeController = new HomeController();

	require '../../Lib/FlashMessages.php';
	if (!session_id()) @session_start();
	// Instantiate the class
	$msg = new \Plasticbrain\FlashMessages\FlashMessages();
	date_default_timezone_set('America/Mexico_City');

    $RolesId = $_POST['Roles'];
    $Nombres = $_POST['nombreUsuario'];
    $Apellidos = $_POST['apellidosUsuario'];
    //$FechaAlta = $_POST['FechaAlta'];
    $Email = $_POST['email'];
    $Telefono = $_POST['telefono'];
    $Status = 1;
	$Contrasenia = password_hash( $_POST['contrasena'], PASSWORD_DEFAULT);
	$generoId =  $_POST['generos'];
	$Fnto =  $_POST['fechanacimiento'];
	//$Contrasenia=md5($_POST['contrasena']);
    
	if ($Usuario = $HomeController->VerUsuario($Email)) {
		$msg->error('ERROR, Un usuario con este correo existe');
		echo("<script language='javascript'>location.href='../../Views/pages/index.php';</script>");
		}else{
			
			if($HomeController->AgregarUsuario($RolesId,$Nombres,$Apellidos,$Email,$Telefono,$Status,$Contrasenia,$generoId,$Fnto) == true){

				$msg->success('!Agregado con exito¡');
				
				header("location: ../../Views/pages/tablas.php");
			}else{
				$msg->error('¡ERROR, no se Agrego!..');
			}
		}
	


	
//}
?>