<?php
function Conexion(){

   // $serverName = "127.0.0.1";
  //  $connectionOptions = array("Database"=>"sade22","Uid"=>"root", "PWD"=>"", "CharacterSet"=>"UTF-8");
  $conn = mysqli_connect("cuc-udg22.mysql.database.azure.com",
  "SADE22@cuc-udg22", "Sade_2022", "bzya6emoafjbqjkolhiy");
//  mysqli_connect($serverName, $connectionOptions);
    return $conn;
}	



    
function getTutorAcademico(){
    $conn = Conexion();
    $query = '';

    $result = mysqli_query($conn,$query);
    $listas = '<option value="0"> Seleccione Tutor Padre</option>';

    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $listas .= "<option value= '$row[id]'> $row[Rol]</option>";
    }
    return $listas;
}

echo getRoles();



?>