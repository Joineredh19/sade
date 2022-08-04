<?php    

    session_start(); 
    session_unset(); 
    session_destroy(); 
    header("location: ../../Views/pages/loginAdmin.php");
    exit();
?>