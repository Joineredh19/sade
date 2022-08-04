<?php
/* ====================================== FALTAS SIN ATENDER ======================================*/
$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Monday' AND Falta = 0"); 
$LunesIna = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Tuesday' AND Falta = 0"); 
$MartesIna = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Wednesday' AND Falta = 0"); 
$MiercolesIna = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Thursday' AND Falta = 0"); 
$JuevesIna = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Friday' AND Falta = 0"); 
$ViernesIna = mysqli_num_rows($GrafInasistencia);
/* ==================================== FIN FALTAS SIN ATENDER ====================================*/


/* ====================================== FALTAS ATENDIDAS ======================================*/
$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Monday' AND Falta = 2"); 
$LunesAten = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Tuesday' AND Falta = 2"); 
$MartesAten = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Wednesday' AND Falta = 2"); 
$MiercolesAten = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Thursday' AND Falta = 2"); 
$JuevesAten = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Friday' AND Falta = 2"); 
$ViernesAten = mysqli_num_rows($GrafInasistencia);
/* ==================================== FIN FALTAS ATENDIDAS ====================================*/
?>