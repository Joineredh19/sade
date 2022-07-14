<?php

    $html = "";
    if ($_POST["rolelegido"]==1) {
        $html = '';
		?>
            <select name="RegisInter" id="RegisInter" required class="form-control " aria-label="Default select example">
				<option value="#" selected>Elige que acción realizar</option>
                <option value="1">Mostrar Formulario</option>
                <option value="2">Mostrar Codigo QR</option>
		    </select>
            
            <div id="FormuAccion"></div>
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
    $("#RegisInter").on('change', function () {
        $("#RegisInter option:selected").each(function () {
            asisinterno=$(this).val();
            $.post("../../Asistencia/AsisInterno.php", { asisinterno: asisinterno }, function(data){
                $("#FormuAccion").html(data);
            });         
        });
   });
  });
</script>

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