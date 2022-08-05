<?php
$query_inasistencia = mysqli_query($conn, "SELECT tbitacorasalumnosdia.id, tbitacorasalumnosdia.FHoraAsistencia, tbitacorasalumnosdia.Falta, tbitacorasalumnosdia.DesFalta, tbitacorasalumnosdia.DesAptitud, tbitacorasalumnosdia.DesAprovechamiento,
                                        tdatosalumnos.Codigo, tusuarios.Nombres, tusuarios.Apellidos, tturnos.Turno
                                        FROM tbitacorasalumnosdia
                                        INNER JOIN tdatosalumnos ON CONVERT(tbitacorasalumnosdia.Codigo using utf8) collate utf8_spanish_ci = tdatosalumnos.Codigo
										INNER JOIN tusuarios ON tdatosalumnos.TUsuarios_id = tusuarios.id
                                        INNER JOIN tturnos ON tdatosalumnos.TTurnos_id = tturnos.id
                                        WHERE tbitacorasalumnosdia.EstatusReg = 1 ORDER BY tbitacorasalumnosdia.id ASC");
    
    $result = mysqli_num_rows($query_inasistencia);
    
	if($result > 0){

		while ($data = mysqli_fetch_array($query_inasistencia)){
?>
			<tr>
                <td align="center"><?php echo $data["id"]; ?></td>
				<td align="center"><?php echo $data["Codigo"]; ?></td>
                <td align="center"><?php echo $data["Turno"]; ?></td>
                <td align="center"><?php echo $data["Nombres"]; ?></td>
				<td align="center"><?php echo $data["Apellidos"]; ?></td>
                <td align="center"><?php echo $data["FHoraAsistencia"]; ?></td>
				<td align="center"><?php echo $data["DesFalta"]; ?></td>
				<td align="center"><?php echo $data["DesAptitud"]; ?></td>
				<td align="center"><?php echo $data["DesAprovechamiento"]; ?></td>

				<?php if($data['Falta'] == 0 OR $data['Falta'] == 2) {?>
					<td align="center" style="padding: 0;"> <a href="controlasistencias.php?id=<?php echo $data["id"];?>" target="_blank" title="Actualizar Asistencia" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
				<?php }?>
                
			</tr>	
<?php
		}
	}
?>