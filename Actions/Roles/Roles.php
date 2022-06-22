<?php
function Conexion(){

    $serverName = "localhost";
    $connectionOptions = array("Database"=>"sade2022","Uid"=>"root", "PWD"=>"", "CharacterSet"=>"UTF-8");
    
    $conn = mysqli_connect($serverName, $connectionOptions);

    return $conn;
}	


function getListaDoc(){
    $conn = Conexion();
    $query = 'SELECT * FROM Troles';

    $result = mysqli_query($conn,$query);
    $listas = '<option value="0"> Seleccione rol</option>';

    while ($row = mysqli_fetch_array($result, MYSQLI_FETCH_ASSOC)) {
        $listas .= "<option value= '$row[Id]'> $row[Roles]</option>";
    }
    return $listas;
}

echo getListaDoc();

?>