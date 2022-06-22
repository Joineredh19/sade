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


	$Fecha1 = $_POST['Fecha1'].' '.$_POST['Fecha1Hora'];
	$Fecha2 = $_POST['Fecha2'].' '.$_POST['Fecha2Hora'];
	$Pte_NumDoc = $_POST['Pte_NumDoc'];
	$Pte_TipoDoc = strtoupper($_POST['Pte_TipoDoc']);
	$Pte_FechaNac = $_POST['Pte_FechaNac'];
	$Pte_Edad = $_POST['Pte_Edad'];
	$Pte_Ap1 = strtoupper($_POST['Pte_Ap1']);
	$Pte_Ap2 = strtoupper($_POST['Pte_Ap2']);
	$PteNom1 = strtoupper($_POST['PteNom1']);
	$Pte_Nom2 = strtoupper($_POST['Pte_Nom2']);
	$Aco_Nombres = strtoupper($_POST['Aco_Nombres']);
	$Aco_Apellidos = strtoupper($_POST['Aco_Apellidos']);
	$Aco_Documento = $_POST['Aco_Documento'];
	$Aco_Perentezco = strtoupper($_POST['Aco_Perentezco']);
	$Sv_Origen = $_POST['Sv_Origen'];
	$Sv_Origen1 = $_POST['Sv_Origen1'];
	$Sv_Origen2 = $_POST['Sv_Origen2'];
	$Sv_Origen3 = $_POST['Sv_Origen3'];
	$Sv_Llegada = $_POST['Sv_Llegada'];
	$Sv_Llegada1 = $_POST['Sv_Llegada1'];
	$Sv_Llegada2 = $_POST['Sv_Llegada2'];
	$Sv_Llegada3 = $_POST['Sv_Llegada3'];
	$Sv_Salida = $_POST['Sv_Salida'];
	$Sv_Salida1 = $_POST['Sv_Salida1'];
	$Sv_Salida2 = $_POST['Sv_Salida2'];
	$Sv_Salida3 = $_POST['Sv_Salida3'];
	$Sv_Complejidad = $_POST['Sv_Complejidad'];
	$Sv_TipoServicio = $_POST['Sv_TipoServicio'];
	$Sv_ExamenSolicitado = $_POST['Sv_ExamenSolicitado'];
	$Ef_Ta = $_POST['Ef_Ta'];
	$Ef_Fr = $_POST['Ef_Fr'];
	$Ef_Temp = $_POST['Ef_Temp'];
	$Ef_Glasgow = $_POST['Ef_Glasgow'];
	$Ef_Dx1 = $_POST['Ef_Dx1'];
	$Ef_Dx2 = $_POST['Ef_Dx2'];
	$Ef_HallazgoPos1 = $_POST['Ef_HallazgoPos1'];
	$Ef_Antecedentes1 = $_POST['Ef_Antecedentes1'];
	$Ef_Gin1 = $_POST['Ef_Gin1'];
	$Ef_Gin2 = $_POST['Ef_Gin2'];
	$Ef_Gin3 = $_POST['Ef_Gin3'];
	$Ef_Gin4 = $_POST['Ef_Gin4'];
	$Ef_Gin5 = $_POST['Ef_Gin5'];





	if($HomeController->AgregarUsuario() == true){

		$msg->success('!Agregado con exito¡');
		
		header("location: ../../Views/pages/buscar.php");
	}else{
		$msg->error('¡ERROR, no se Agrego!..');
	}
}
?>