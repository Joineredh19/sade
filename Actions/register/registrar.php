<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<?php header("Content-Type: text/html; charset=utf-8");?>
</head>

<?php 

session_start();
if(!isset($_SESSION["Usuario"])){
	header("location: ../../Views/pages/login.php");
}else{
	require_once('../../Controllers/HomeController.php');
	$HomeController = new HomeController();

	require '../../Lib/FlashMessages.php';
	if (!session_id()) @session_start();
	// Instantiate the class
	$msg = new \Plasticbrain\FlashMessages\FlashMessages();
	date_default_timezone_set('America/Mexico_Ciy');

    $RolesId = $_POST['RolesId'];
    $Nombres = $_POST['nombreUsuario'];
    $Apellidos = $_POST['apellidosUsuario'];
    $FechaAlta = $_POST['FechaAlta'];
    $Email = $_POST['email'];
    $Telefono = $_POST['telefono'];
    $Status = $_POST['Status'];
    $Contraseña = $_POST['Contraseña'];



	if($HomeController->AgregarUsuario($Nombres,$Apellidos,$Email,$Telefono,$Status,$RolesId,$FechaAlta,$Contraseña) == true){

		$msg->success('!Agregado con exito¡');
		
		header("location: ../../Views/pages/index.php");
	}else{
		$msg->error('¡ERROR, no se Agrego!..');
	}
}
?>