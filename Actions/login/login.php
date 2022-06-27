<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <?php header("Content-Type: text/html; charset=utf-8");?>
</head>

<?php 

	session_start();
	require_once('../../Controllers/HomeController.php');
	$HomeController = new HomeController();

	require '../../Lib/FlashMessages.php';
	if (!session_id()) @session_start();
	// Instantiate the class
	$msg = new \Plasticbrain\FlashMessages\FlashMessages();

	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	
	if ($Usuario = $HomeController->VerUsuario($Email)) {
		if (password_verify($Password, $Usuario->__GET('contrasenia'))) {
			$_SESSION['Email'] = $Usuario->__GET('Email');
			
			header("location: ../../Views/pages/index.php");
		}else{
			$msg->error('ERROR, La contraseña no es valida..!');
			echo("<script language='javascript'>location.href='../../Views/pages/loginAdmin.php?email=".$Email."';</script>");
		}
	}else{
		$msg->error('ERROR, El correo '.$Email.' no existe..!');
		echo("<script language='javascript'>location.href='../../Views/pages/loginAdmin.php?email=".$Email."';</script>");
	}
?>