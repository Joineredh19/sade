<?php 	session_start(); 
?>
<?php 


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
			$_SESSION['id'] = $Usuario->__GET('id');
			
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