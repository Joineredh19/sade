<?php
session_start();		
 ob_start();
?>
<?php

require_once '../../Lib/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf=new Dompdf();

require_once('../../Controllers/HomeController.php');
$HomeController = new HomeController();
date_default_timezone_set('America/Mexico_City');


//$ips = $HomeController->VerIPS();
if (isset($_GET['IdUsuario'])) {
    $IdUsuario = $_GET['IdUsuario'];
    $data = $HomeController->VerUsuarioxId($IdUsuario);
  //  $Firma=$HomeController->VerOta_Usuario($SESSION['IdUsuario'])->_GET('FirmaU');

  }else{
 //   $IdUsuario = $HomeController->MaximoOta_Informe_Traslado()->__GET('IdServicio')+1;

  }

  $nombreImagen = "../Resource/img/SLALogo.png";
  $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));

  $fotoP = "data:image/png;base64," .base64_encode($data->__GET("Imagen"))
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  
<table width="100%" border="1" style="font-size: 12px">
    <tr>
        <td rowspan="4" colspan="2" align="center">
            <img src="<?php echo $fotoP?>" width="120" height="120">
        </td>
        <td rowspan="4" colspan="4" align="center" valign="middle" width="60%">
            <strong style="font-size: 16px">DATOS DEL ESTUDIANTE</strong><br>
           <?php echo ""; ?><br>
           <?php echo "NIT "?><br>
           <?php echo""; ?><br>
           <?php echo""; ?><br>
           <?php echo "Telefono:"?>
          </td>
          <td colspan="1"><strong>Fecha:</strong></td>
          <td colspan="1" align="center"><?php echo date('d/m/Y')?></td>
        </tr>
        <tr>
          <td colspan="1"><strong>N° Servicio: </strong></td>
          <td colspan="1" align="center"><?php echo"";?></td>
        </tr>
        <tr>
          <td colspan="1"><strong>Ficha: </strong></td>
          <td colspan="1" align="center"><?php echo"";?></td>
          </tr>
    <tr>
        <td colspan="1"><strong>Pagina:</strong></td>
        <td colspan="1" align="center"><?php echo ""?></td>
    </tr>
</table><br>

<table style="width:100%">
  <tr>
    <th colspan="4">Informacion General Del Estudiante</th>
  </tr>
  <tr>
    <td colspan="2"><?php echo "Nombres: ".$data->__GET('Nombres')?></td>
    <td colspan="2"><?php echo "Apellidos: ".$data->__GET('Apellidos')?> </td>
  </tr>
  <tr>
    <td> <?php echo "Identificación: "?></td>
    <td> <?php echo "T Identificación: " ?></td>
    <td> <?php echo "Edad: " ?></td>
    <td><?php echo "Fecha Nacimiento: " ?></td>
    
    
  </tr>
   <tr>
  <td> <?php echo "Telefono: " ?> </td>
 
  <td><?php echo "Direccion: " ?></td>
  </tr>
  <tr>
  
    <th colspan="4">Información Adicional Del Estudiante</th>
  </tr>
   <tr>
   </tr>
  <tr>
    <td><?php echo 'Código:  '?></td>
     <td><?php echo 'E-mail:  '?></td>
    <td></td>
    <td><?php echo 'N° de seguro social:  '?></td>
    </tr>
    <tr>
    <td><?php echo 'Nombres:  '?></td>
    <td><?php echo 'Teléfono:  '?></td>
    <td></td>
    <td><?php echo 'RFC:  '?></td>
  </tr>
  <tr>
    <td><?php echo 'Apellidos:  '?></td>
    <td><?php echo 'Status:  '?></td>
    <td></td>
    <td><?php echo 'CURP:  '?></td>
  </tr>
  <tr>
   
  </tr>
  <tr>
  
 </tr>
 <tr>
    <td><?php echo 'Tipo de sangre:  '?></td>
     <td><?php echo 'Alergias:  '?></td>
    <td></td>
    <td><?php echo 'País:  '?></td>
    </tr>
    <tr>
    <td><?php echo 'Estado:  '?></td>
    <td><?php echo 'Ciudad:  '?></td>
    <td></td>
    <td><?php echo 'Código Postal:  '?></td>
  </tr>
  <tr>
    <td><?php echo 'Colonia:  '?></td>
    <td><?php echo 'Calle y número:  '?></td>
    <td></td>
    <td><?php echo 'Tutor académico:  '?></td>
    <tr>
    <td><?php echo 'Tutor padre:  '?></td>
     <td><?php echo 'Turno:  '?></td>
    
    
  </tr>
  <tr>
   
  </tr>
  <tr>
  
 </tr>
 <th colspan="4">Informacion Del Tutor</th>
  </tr>
   <tr>
    <td colspan="2"><?php echo 'Nombres: ' ?></td>
    <td colspan="2"><?php echo 'Apellidos: ' ?></td>
  </tr>
  <tr>
    <td><?php echo 'Identificación: ' ?></td>
    <td></td>
    <td> <?php echo 'Parentesco: '?></td>
  </tr>
  </table>
  <br>
  <table style="width:100% ">
   <tr>
</table>
<br>
 <table style="width:100% ">
  <tr>
   <th colspan="4">Examen Físico Pre-Traslado</th>
 </tr>
 <tr>
   <td><?php echo 'T/A: '?></td>
   <td><?php echo 'F.R: '?></td>
   </tr>
   <tr>
   <td><?php echo 'TEMP: '?></td>
   <td><?php echo 'GLASSGOW: '?></td>
 </tr>
 <tr>
   <td><?php echo 'Diagnostico 1: '?></td>
   <td><?php echo 'Diagnostico 2: '?></td>
 </tr>
 <tr>
  <td><?php echo 'Hallazgos Positivos: '?></td>
 </tr>
 <tr>
  <td><?php echo 'Antecedentes: '?></td>
 </tr>
 </table>
 <table style="width:100% ">
 <tr>
   
</html>



<?php

$html= ob_get_clean();
//echo $html;


$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');

$dompdf->render();
$dompdf->stream('.pdf', array("Attachment"=>false))
/*$pdf->SetHeader($html);
$pdf->WriteHTML($content); 
$pdf->Output();*/
?>