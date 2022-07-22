<?php
function Conexion(){

    // $serverName = "127.0.0.1";
   //  $connectionOptions = array("Database"=>"sade22","Uid"=>"root", "PWD"=>"", "CharacterSet"=>"UTF-8");
   $conn = mysqli_connect("softwarela.com.mx",
   "softwa60_sade22", "Sade2022*", "softwa60_sade22");
 //  mysqli_connect($serverName, $connectionOptions);
     return $conn;
 }	

function getEstado(){
    $conn = Conexion();

    $Id = $_POST['Id'];
    $query = "SELECT * FROM tcodigospostales WHERE TCiudades_id = $Id";

    $result = mysqli_query($conn,$query);
    $listas = '<option value="0"> Seleccione Código Postal</option>';

    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $listas .= "<option value= '$row[id]'> $row[CodigoPostal]</option>";
    }
    return $listas;
}

echo getEstado();

?>