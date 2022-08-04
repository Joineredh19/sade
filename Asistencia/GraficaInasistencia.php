<?php
/* ====================================== FALTAS SIN ATENDER DIA ======================================*/
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
/* ==================================== FIN FALTAS SIN ATENDER DIA ====================================*/


/* ====================================== FALTAS ATENDIDAS DIA ======================================*/
$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Monday' AND Falta = 2"); 
$LunesAten = mysqli_num_rows($GrafAtendido);

$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Tuesday' AND Falta = 2"); 
$MartesAten = mysqli_num_rows($GrafAtendido);

$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Wednesday' AND Falta = 2"); 
$MiercolesAten = mysqli_num_rows($GrafAtendido);

$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Thursday' AND Falta = 2"); 
$JuevesAten = mysqli_num_rows($GrafAtendido);

$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Friday' AND Falta = 2"); 
$ViernesAten = mysqli_num_rows($GrafAtendido);
/* ==================================== FIN FALTAS ATENDIDAS DIA ====================================*/




/* ====================================== FALTAS SIN ATENDER MES ======================================*/
$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'January' AND Falta = 0"); 
$EneroIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'February' AND Falta = 0"); 
$FebreroIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'March' AND Falta = 0"); 
$MarzoIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'April' AND Falta = 0"); 
$AbrilIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'May' AND Falta = 0"); 
$MayoIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'June' AND Falta = 0"); 
$JunioIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'July' AND Falta = 0"); 
$JulioIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'August' AND Falta = 0"); 
$AgostoIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'September' AND Falta = 0"); 
$SeptIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'October' AND Falta = 0"); 
$OctIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'November' AND Falta = 0"); 
$NovIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'December' AND Falta = 0"); 
$DicIna = mysqli_num_rows($GrafInasistenciaMes);
/* ==================================== FIN FALTAS SIN ATENDER MES ====================================*/


/* ====================================== FALTAS ATENDIDAS MES ======================================*/
$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'January' AND Falta = 2"); 
$EneroAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'February' AND Falta = 2"); 
$FebreroAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'March' AND Falta = 2"); 
$MarzoAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'April' AND Falta = 2"); 
$AbrilAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'May' AND Falta = 2"); 
$MayoAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'June' AND Falta = 2"); 
$JunioAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'July' AND Falta = 2"); 
$JulioAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'August' AND Falta = 2"); 
$AgostoAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'September' AND Falta = 2"); 
$SeptAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'October' AND Falta = 2"); 
$OctAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'November' AND Falta = 2"); 
$NovAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'December' AND Falta = 2"); 
$DicAten = mysqli_num_rows($GrafAtendidoMes);
/* ==================================== FIN FALTAS ATENDIDAS MES ====================================*/
?>