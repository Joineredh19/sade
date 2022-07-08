<?php

    $html = "";
    if ($_POST["asiselegido"]==1) {
        $html = '';
		?>  
            <h3></h3>
            <h3>Sistema Acceso Visitantes</h3>

            <form action="#" method="POST">
                <input type="Ine" id="IngreseINE" class="form-control" name="IngreseINE" required placeholder="Ingrese su INE">
                <br>
                <input type="Nombre" id="IngreseNombre" class="form-control" name="IngreseNombre" required placeholder="Nombres">
                <br>
                <input type="Apellidos" id="IngreseApellidos" class="form-control" name="IngreseApellidos" required placeholder="Apellidos">
                <br>
                <input type="email" id="IngreseEmail" class="form-control" name="IngreseEmail" placeholder="E-mail">
                <br>
                <input type="number" id="IngreseTele" class="form-control" name="IngreseTele" placeholder="Teléfono">
                <br>
                <select name="ATrabajo" id="ATrabajo" class="form-control " required aria-label="Área de trabajo a la que va"></select>
                <br>
                <input type="submit" class="fadeIn fourth" value="Ingresar" name="registrar">
            </form>
        <?php
			
    }
    $html = "";
    if ($_POST["asiselegido"]==2) {
        $html = '';
		?>  
            <h3></h3>
            <h3>Sistema Acceso Visitantes</h3>

            <form action="#" method="POST">
                <input type="text" id="email_tel" class="fadeIn second" name="IngreseINE" required placeholder="Identificación oficial">
                <input type="text" id="observaciones" class="fadeIn second" name="observaciones" placeholder="Observaciones (Opcional)">
                <input type="submit" class="fadeIn fourth" value="Ingresar" name="registrar">
            </form>
        <?php
    }
    echo $html; 
    
?>
<script src="../Resource/js/plugins/Visitantes.js"></script>