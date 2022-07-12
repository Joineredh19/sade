<?php 

session_start();
if(!isset($_SESSION["id"])){
	header("location: ../../Views/pages/login.php");
}else{
	require_once('../../Controllers/HomeController.php');
	$HomeController = new HomeController();

	require '../../Lib/FlashMessages.php';
	if (!session_id()) @session_start();
	// Instantiate the class
	$msg = new \Plasticbrain\FlashMessages\FlashMessages();
	date_default_timezone_set('America/Mexico_City');
    
    
    $Id = $_POST['idUsuario'];
    $NewPass = $_POST['newpass'];
    $ConfPass = $_POST['confirpass'];

	
   
	if ($NewPass == $ConfPass) {
        $NewPass = password_hash($NewPass, PASSWORD_DEFAULT);
        if($HomeController->ActualizarPass($Id,$NewPass) == true){

            $msg->success('¡Contraseña Modificada con Exito!');
            header("location: ../../Views/pages/tablas.php");
        }else{
            $msg->error('¡ERROR, Contraseñas no coinciden');
            header("location: ../../Views/pages/recucontra.php");
        }
		}
}
?>

