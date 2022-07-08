<?php
	/**
	* 
	*/
	include '../../Config/Conexion.config.php';
	class Conexion
	{
		
		public static function Conectar()
		{
	/* 		// configurar la coneccion
			$dsn = 'sqlsrv:Server=' .DB_HOST. ';Database=' .DB_DATABASE;
			//$dsn = new PDO("sqlsrv:Server=localhost;Database=testdb", "NombreUsuario", "Contraseña");

			try
			{	
				$pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
			//$pdo = new PDO('sqlsrv:Server=190.242.112.94; Database=sena', 'Ota', 'Sena2022*');

				//$pdo->exec('SET names utf8');
				return $pdo;
			}catch(PDOException $e)
			{
				die($e->getMessage()." -> No hay Conexion a la Base de Datos");
			} */
			// 
			/// configurar la coneccion
			 $dsn = 'mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8';
			 $mOptions=array(
			 	PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
			 	PDO::ATTR_EMULATE_PREPARES => FALSE,
			 );
			 try
			 {	
			 	$pdo = new PDO($dsn, USERNAME, PASSWORD, $mOptions);
			 	return $pdo;
			 }catch(Exception $e)
			 {
			 	die($e->getMessage()." -> No hay Conexion a la Base de Datos");
			 }
		}
		
	}
	?>