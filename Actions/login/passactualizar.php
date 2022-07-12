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
        if($HomeController->CompletarAlumnos($Id, $Codigo,$NSeguroSocial,$Rfc,$Curp,$TipoSangre,$Alergia,$Selecolonia,$Calleynum,$Seletutoraca,$Selepadre,$Seleturno) == true){

            $msg->success('¡Informacion Alumnos Completada con Exito!');
            header("location: ../../Views/pages/tablas.php");
        }else{
            $msg->error('¡ERROR, no se Agregó!..');
        }
		}
}
/*SELECT tusuarios.id,tusuarios.Nombres, tusuarios.Apellidos, tusuarios.Email, tusuarios.Telefono, tgeneros.genero,troles.rol,tusuarios.TRoles_id
FROM  tusuarios  INNER JOIN tgeneros ON tusuarios.tgeneros_id = tgeneros.id  INNER JOIN troles ON tusuarios.TRoles_id = troles.id  
WHERE troles_id = 4  ;*/
?>

