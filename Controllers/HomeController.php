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


	}