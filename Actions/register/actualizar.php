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
    $Codigo = $_POST['codigo'];
    $Nombre = $_POST['nombreUsuario'];
    $Apellido = $_POST['apellidosUsuario'];
    $Roles = $_POST['rol'];
    $NSeguroSocial = $_POST['numerosocial'];
    $Rfc = $_POST['rfc1'];
	$Curp = $_POST['curp1'];
    $TipoSangre = $_POST['TipoSangre'];
    $Alergia = $_POST['alergia'];
    $Selecolonia = $_POST['selecolonia'];
    $Calleynum = $_POST['calleynum'];
    $Seletutoraca = $_POST['seletutoraca'];
    $Selepadre = $_POST['selepadre'];
    $Seleturno = $_POST['seleturno'];
	
   
	if ($Roles == "4") {
        if($HomeController->CompletarAlumnos($Id, $Codigo,$NSeguroSocial,$Rfc,$Curp,$TipoSangre,$Alergia,$Selecolonia,$Calleynum,$Seletutoraca,$Selepadre,$Seleturno) == true){

            $msg->success('¡Informacion Alumnos Completada con Exito!');
            header("location: ../../Views/pages/tablas.php");
        }else{
            $msg->error('¡ERROR, no se Agregó!..');
        }
		}else if($Roles == 5){
			
			if($HomeController->CompletarTutorAca($Calleynum,$Id,$Selecolonia) == true){

                $msg->success('¡Informacion Tutor Academico Completada con Exito!');
				header("location: ../../Views/pages/tablas.php");
			}else{
				$msg->error('¡ERROR, no se Agregó!..');
			}
		}else if($Roles == 6){
        
            if($HomeController->CompletarTutorPadre($Calleynum,$Id,$Selecolonia) == true){

                $msg->success('¡Informacion Tutor Padre Completada con Exito!');
				header("location: ../../Views/pages/tablas.php");
			}else{
				$msg->error('¡ERROR, no se Agregó!..');
			}
        }else{
            $msg->error('!ERROR, Rol No admite completar Información¡');
				
				header("location: ../../Views/pages/tablas.php");
              /*  var_dump($Id,$Codigo,$Nombre,$Apellido,$Roles, $NSeguroSocial,$Rfc, $Curp,
                $TipoSangre,$Alergia,$Selecolonia,$Calleynum,$Seletutoraca,$Selepadre,$Seleturno);
        */}
	


	
}
?>