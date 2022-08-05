<?php
/* ====================================== FALTAS SIN ATENDER DIA ======================================*/
$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Monday' AND Falta = 0 AND EstatusReg = 1"); 
$LunesIna = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Tuesday' AND Falta = 0 AND EstatusReg = 1"); 
$MartesIna = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Wednesday' AND Falta = 0 AND EstatusReg = 1"); 
$MiercolesIna = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Thursday' AND Falta = 0 AND EstatusReg = 1"); 
$JuevesIna = mysqli_num_rows($GrafInasistencia);

$GrafInasistencia = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Friday' AND Falta = 0 AND EstatusReg = 1"); 
$ViernesIna = mysqli_num_rows($GrafInasistencia);
/* ==================================== FIN FALTAS SIN ATENDER DIA ====================================*/


/* ====================================== FALTAS ATENDIDAS DIA ======================================*/
$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Monday' AND Falta = 2 AND EstatusReg = 1"); 
$LunesAten = mysqli_num_rows($GrafAtendido);

$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Tuesday' AND Falta = 2 AND EstatusReg = 1"); 
$MartesAten = mysqli_num_rows($GrafAtendido);

$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Wednesday' AND Falta = 2 AND EstatusReg = 1"); 
$MiercolesAten = mysqli_num_rows($GrafAtendido);

$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Thursday' AND Falta = 2 AND EstatusReg = 1"); 
$JuevesAten = mysqli_num_rows($GrafAtendido);

$GrafAtendido = mysqli_query($conn, "SELECT DAYNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE DAYNAME(FHoraAsistencia) = 'Friday' AND Falta = 2 AND EstatusReg = 1"); 
$ViernesAten = mysqli_num_rows($GrafAtendido);
/* ==================================== FIN FALTAS ATENDIDAS DIA ====================================*/




/* ====================================== FALTAS SIN ATENDER MES ======================================*/
$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'January' AND Falta = 0 AND EstatusReg = 1"); 
$EneroIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'February' AND Falta = 0 AND EstatusReg = 1"); 
$FebreroIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'March' AND Falta = 0 AND EstatusReg = 1"); 
$MarzoIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'April' AND Falta = 0 AND EstatusReg = 1"); 
$AbrilIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'May' AND Falta = 0 AND EstatusReg = 1"); 
$MayoIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'June' AND Falta = 0 AND EstatusReg = 1"); 
$JunioIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'July' AND Falta = 0 AND EstatusReg = 1"); 
$JulioIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'August' AND Falta = 0 AND EstatusReg = 1"); 
$AgostoIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'September' AND Falta = 0 AND EstatusReg = 1"); 
$SeptIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'October' AND Falta = 0 AND EstatusReg = 1"); 
$OctIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'November' AND Falta = 0 AND EstatusReg = 1"); 
$NovIna = mysqli_num_rows($GrafInasistenciaMes);

$GrafInasistenciaMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'December' AND Falta = 0 AND EstatusReg = 1"); 
$DicIna = mysqli_num_rows($GrafInasistenciaMes);
/* ==================================== FIN FALTAS SIN ATENDER MES ====================================*/


/* ====================================== FALTAS ATENDIDAS MES ======================================*/
$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'January' AND Falta = 2 AND EstatusReg = 1"); 
$EneroAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'February' AND Falta = 2 AND EstatusReg = 1"); 
$FebreroAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'March' AND Falta = 2 AND EstatusReg = 1"); 
$MarzoAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'April' AND Falta = 2 AND EstatusReg = 1"); 
$AbrilAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'May' AND Falta = 2 AND EstatusReg = 1"); 
$MayoAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'June' AND Falta = 2 AND EstatusReg = 1"); 
$JunioAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'July' AND Falta = 2 AND EstatusReg = 1"); 
$JulioAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'August' AND Falta = 2 AND EstatusReg = 1"); 
$AgostoAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'September' AND Falta = 2 AND EstatusReg = 1"); 
$SeptAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'October' AND Falta = 2 AND EstatusReg = 1"); 
$OctAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'November' AND Falta = 2 AND EstatusReg = 1"); 
$NovAten = mysqli_num_rows($GrafAtendidoMes);

$GrafAtendidoMes = mysqli_query($conn, "SELECT MONTHNAME(FHoraAsistencia) FROM `tbitacorasalumnosdia` WHERE MONTHNAME(FHoraAsistencia) = 'December' AND Falta = 2 AND EstatusReg = 1"); 
$DicAten = mysqli_num_rows($GrafAtendidoMes);
/* ==================================== FIN FALTAS ATENDIDAS MES ====================================*/
?>