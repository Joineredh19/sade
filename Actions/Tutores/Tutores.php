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
    $query = 'SELECT tusuarios.id,tusuarios.Nombres, tusuarios.Apellidos, tusuarios.Email, tusuarios.Telefono, tgeneros.genero,troles.rol
    FROM  tusuarios  INNER JOIN tgeneros ON tusuarios.tgeneros_id = tgeneros.id  INNER JOIN troles ON tusuarios.TRoles_id = troles.id 	ORDER BY tusuarios.id  ASC ';

    $result = mysqli_query($conn,$query);
    $listas = '<option value="0"> Seleccione rol</option>';

    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $listas .= "<option value= '$row[id]'> $row[Rol]</option>";
    }
    return $listas;
}

echo getRoles();



?>