<?php

    $html = "";
    if ($_POST["estadoselegidos"]==1) {
        $html = '';
        include 'conexion.php';
        $query_ciudad = mysqli_query($conexion, "SELECT id, Ciudad FROM tciudades 
                                                    WHERE id = 1");
		$result_ciudad = mysqli_num_rows($query_ciudad);
			?>
            <option value="#">Elige tu ciudad</option>
            <?php
			if($result_ciudad > 0){
				while($tciudades = mysqli_fetch_array($query_ciudad)){
			?>
				<option value="<?php echo $tciudades['id']; ?>"><?php echo $tciudades['Ciudad']; ?></option>
			<?php
				}
			}
    }
    if ($_POST["estadoselegidos"]==12) {
        $html = '';  
        include 'conexion.php';
        $query_ciudad = mysqli_query($conexion, "SELECT id, Ciudad FROM tciudades 
                                                    WHERE id = 21");
		$result_ciudad = mysqli_num_rows($query_ciudad);
            ?>
            <option value="#">Elige tu ciudad</option>
            <?php							
			if($result_ciudad > 0){
				while($tciudades = mysqli_fetch_array($query_ciudad)){
			?>
				<option value="<?php echo $tciudades['id']; ?>"><?php echo $tciudades['Ciudad']; ?></option>
			<?php
				}
			}
    }
    echo $html; 
    
?>

<?php

    $html = "";
    if ($_POST["ciudadeselegidos"]==1) {
        $html = '';
        include 'conexion.php';
        $query_cpostal = mysqli_query($conexion, "SELECT id, CPostal FROM tcpostales
                                                    WHERE id = 1");
		$result_cpostal = mysqli_num_rows($query_cpostal);
            ?>
            <option value="#">Elige tu codigo postal</option>
            <?php			
			if($result_cpostal > 0){
				while($tcpostales = mysqli_fetch_array($query_cpostal)){
			?>
				<option value="<?php echo $tcpostales['id']; ?>"><?php echo $tcpostales['CPostal']; ?></option>
			<?php
                }
			}
    }
    if ($_POST["ciudadeselegidos"]==21) {
        $html = '';
        include 'conexion.php';  
        $query_cpostal = mysqli_query($conexion, "SELECT id, CPostal FROM tcpostales
                                                    WHERE id = 13 OR id = 14 OR id = 15 OR id = 16");
		$result_cpostal = mysqli_num_rows($query_cpostal);
            ?>
            <option value="#">Elige tu codigo postal</option>
            <?php			
			if($result_cpostal > 0){
				while($tcpostales = mysqli_fetch_array($query_cpostal)){
			?>
				<option value="<?php echo $tcpostales['id']; ?>"><?php echo $tcpostales['CPostal']; ?></option>
			<?php
                }
			}
    }
    echo $html; 
    
?>

<?php

    $html = "";
    if ($_POST["cpostaleselegidos"]==1) {
        $html = '';
        include 'conexion.php';
        $query_colonia = mysqli_query($conexion, "SELECT id, Colonia FROM tcolonias
                                                    WHERE id = 1");
		$result_colonia = mysqli_num_rows($query_colonia);
            ?>
            <option value="#">Elige tu colonia</option>
            <?php			
			if($result_colonia > 0){
				while($tcolonias = mysqli_fetch_array($query_colonia)){
			?>
				<option value="<?php echo $tcolonias['id']; ?>"><?php echo $tcolonias['Colonia']; ?></option>
			<?php
				}
			}
    }
    if ($_POST["cpostaleselegidos"]==13) {
        $html = '';
        include 'conexion.php';  
        $query_colonia = mysqli_query($conexion, "SELECT id, Colonia FROM tcolonias
                                                    WHERE id = 12 OR id = 13");
		$result_colonia = mysqli_num_rows($query_colonia);
            ?>
            <option value="#">Elige tu colonia</option>
            <?php			
			if($result_colonia > 0){
				while($tcolonias = mysqli_fetch_array($query_colonia)){
			?>
				<option value="<?php echo $tcolonias['id']; ?>"><?php echo $tcolonias['Colonia']; ?></option>
			<?php
				}
			}
    }
    if ($_POST["cpostaleselegidos"]==14) {
        $html = '';
        include 'conexion.php';  
        $query_colonia = mysqli_query($conexion, "SELECT id, Colonia FROM tcolonias
                                                    WHERE id = 14 OR id = 15 OR id = 16 OR id = 17");
		$result_colonia = mysqli_num_rows($query_colonia);
            ?>
            <option value="#">Elige tu colonia</option>
            <?php			
			if($result_colonia > 0){
				while($tcolonias = mysqli_fetch_array($query_colonia)){
			?>
				<option value="<?php echo $tcolonias['id']; ?>"><?php echo $tcolonias['Colonia']; ?></option>
			<?php
				}
			}
    }
    if ($_POST["cpostaleselegidos"]==15) {
        $html = '';
        include 'conexion.php';  
        $query_colonia = mysqli_query($conexion, "SELECT id, Colonia FROM tcolonias
                                                    WHERE id = 18 OR id = 19 OR id = 20 OR id = 21 OR id = 22 OR id = 23
                                                           OR id = 24 OR id = 25 OR id = 26 OR id = 27");
		$result_colonia = mysqli_num_rows($query_colonia);
            ?>
            <option value="#">Elige tu colonia</option>
            <?php			
			if($result_colonia > 0){
				while($tcolonias = mysqli_fetch_array($query_colonia)){
			?>
				<option value="<?php echo $tcolonias['id']; ?>"><?php echo $tcolonias['Colonia']; ?></option>
			<?php
				}
			}
    }
    if ($_POST["cpostaleselegidos"]==16) {
        $html = '';
        include 'conexion.php';  
        $query_colonia = mysqli_query($conexion, "SELECT id, Colonia FROM tcolonias
                                                    WHERE id = 28");
		$result_colonia = mysqli_num_rows($query_colonia);
            ?>
            <option value="#">Elige tu colonia</option>
            <?php			
			if($result_colonia > 0){
				while($tcolonias = mysqli_fetch_array($query_colonia)){
			?>
				<option value="<?php echo $tcolonias['id']; ?>"><?php echo $tcolonias['Colonia']; ?></option>
			<?php
				}
			}
    }
    echo $html; 
    
?>