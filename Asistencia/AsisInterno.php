<?php

    $html = "";
    if ($_POST["asisinterno"]==1) {
        $html = '';
		?>  
            <br>
            <h3>SADE</h3>
            <h3>Sistema Acceso De Estudiantes</h3>
    
            <form action="#" method="POST">
                <input type="text" id="email_tel" class="fadeIn second" name="email_tel" required placeholder="Codigo Institucional">
                <input type="text" id="observaciones" class="fadeIn second" name="observaciones" placeholder="Observaciones (Opcional)">
                <input type="submit" class="fadeIn fourth" value="Ingresar" name="enviar">
            </form>
        <?php
			
    }
    $html = "";
    if ($_POST["asisinterno"]==2) {
        $html = '';
		?>  
            <br>
            <h3>SADE</h3>
            <h3>Sistema Acceso De Estudiantes</h3>
            
            <br>
            <img src="../Resource/img/CodigoQR.png" alt="CodigoQR" style="width: 50%; height:50%;">
            
            <h3></h3>
        <?php
    }
    echo $html; 
    
?>