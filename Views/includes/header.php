<?php
session_start();
if(!isset($_SESSION["Usuario"])){
    header("location: ../../Views/pages/login.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">

    <title>Traslados</title>



</head>
<style type="text/css">
   
</style>
<?php date_default_timezone_set('America/Bogota'); ?>
<body>