<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <?php header("Content-Type: text/html; charset=utf-8");?>
</head>

<?php 

	//session_start();
	require_once('../../Controllers/HomeController.php');
	$HomeController = new HomeController();

	require '../../Lib/FlashMessages.php';
	if (!session_id()) @session_start();
	// Instantiate the class
	$msg = new \Plasticbrain\FlashMessages\FlashMessages();

	$Email = $_POST['Email'];

	if ($Usuario = $UsuarioModel->VerUsuario($Email,$contrasenia)) {
		if ($Usuario->__GET('Contrasenia') == md5($_POST['password'])) {
			$_SESSION['Email'] = $Usuario->__GET('Email');
			
			header("location: ../../Views/pages/index.php");
		}else{
			$msg->error('ERROR, La contraseña no es valida..!');
			echo("<script language='javascript'>location.href='../../Views/pages/login.php?user=".$usuario."';</script>");
		}
	}else{
		$msg->error('ERROR, El usuario '.$usuario.' no existe..!');
		echo("<script language='javascript'>location.href='../../Views/pages/login.php?user=".$usuario."';</script>");
	}
?>