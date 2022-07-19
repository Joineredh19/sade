<?php

    $html = "";
    if ($_POST["rolelegido"]==1) {
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
    if ($_POST["rolelegido"]==2) {
        $html = '';
		?>  
            <select name="RegisVisit" id="RegisVisit" required class="form-control " aria-label="Default select example">
				<option value="#" selected>Elige tipo de registro</option>
                <option value="1">Entrada</option>
                <option value="2">Salida</option>
		    </select>
            
            <div id="FormuVisitantes"></div>
        <?php
    }
    echo $html; 
    
?>

<script type="text/javascript">
  $(document).ready(function(){
    $("#RegisVisit").on('change', function () {
        $("#RegisVisit option:selected").each(function () {
            asiselegido=$(this).val();
            $.post("../../Actions/Visitantes/VisitanteEntradaSalida.php", { asiselegido: asiselegido }, function(data){
                $("#FormuVisitantes").html(data);
            });         
        });
   });
  });
</script>