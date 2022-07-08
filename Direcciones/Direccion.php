    <div class="grupo" id="pregunta_7">
		<label id="Pais">Pais:</label>
		<div id="seleccion">
			<?php 
	        $query_pais = mysqli_query($conexion, "SELECT id, Pais FROM tpaises");
		    $result_pais = mysqli_num_rows($query_pais);
			?>
			<select name="TPaises_id" id="TPaises_id">
				<?php
					if($result_pais > 0){
						while($tpaises = mysqli_fetch_array($query_pais)){
				?>
							<option value="<?php echo $tpaises['id']; ?>"><?php echo $tpaises['Pais']; ?></option>
				<?php
						}
					}
				?>
			</select>
		</div>	  
	</div>
									
	<div class="grupo" id="pregunta_8">
		<label id="Estado">Estado:</label>
		<div id="seleccion">
		    <?php 
			$query_estado = mysqli_query($conexion, "SELECT id, Estado FROM testados");
			$result_estado = mysqli_num_rows($query_estado);
			?>
			<select name="TEstados_id" id="TEstados_id" required>
				<option value="#">Elige tu estado</option>
				<?php
					if($result_estado > 0){
						while($testados = mysqli_fetch_array($query_estado)){
				?>
					<option value="<?php echo $testados['id']; ?>"><?php echo $testados['Estado']; ?></option>
				<?php
						}
					}
				?>
			</select>
		</div>	  
	</div>
									
	<div class="grupo" id="pregunta_9">
		<label id="Ciudad">Ciudad:</label>
		<div id="seleccion">
			<select name="TCiudades_id" id="TCiudades_id" required></select>
		</div>
	</div>
								
    <div class="grupo" id="pregunta_10">
		<label id="CPostal">C. Postal:</label>
		<div id="seleccion">
			<select name="TCPostales_id" id="TCPostales_id" required></select>				
		</div>
	</div>

	<div class="grupo" id="pregunta_11">
		<label id="Colonia">Colonia:</label>
		<div id="seleccion">
			<select name="TColonias_id" id="TColonias_id" required></select>
		</div>
	</div>
									
	<div class="grupo" id="pregunta_12">
		<?php if(isset($_POST["CalleYNumero"])){ ?>
				<input class="input" type="text" name="CalleYNumero" id="CalleYNumero" required value="<?php echo $_POST['CalleYNumero'];?>"><span class="barra"></span>
		<?php }else{ ?>
				<input class="input" type="text" name="CalleYNumero" id="CalleYNumero" required><span class="barra"></span>
		<?php }?>
				<label for="CalleYNumero">Calle y Numero:</label>
	</div>





    <!--JAVASCRIPTbbb 
		<script type="text/javascript">
/*-------------------Selector de dirección--------------------*/
			$(document).ready(function(){
    			$("#TEstados_id").on('change', function () {
        			$("#TEstados_id option:selected").each(function () {
        				estadoselegidos=$(this).val();
    				    $.post("buscardireccion.php", { estadoselegidos: estadoselegidos }, function(data){
    			            $("#TCiudades_id").html(data);
    			        });         
    			    });
			   });
			});

			$(document).ready(function(){
    			$("#TCiudades_id").on('change', function () {
        			$("#TCiudades_id option:selected").each(function () {
        				ciudadeselegidos=$(this).val();
    				    $.post("buscardireccion.php", { ciudadeselegidos: ciudadeselegidos }, function(data){
    			            $("#TCPostales_id").html(data);
    			        });         
    			    });
			   });
			});

			$(document).ready(function(){
    			$("#TCPostales_id").on('change', function () {
        			$("#TCPostales_id option:selected").each(function () {
        				cpostaleselegidos=$(this).val();
    				    $.post("buscardireccion.php", { cpostaleselegidos: cpostaleselegidos }, function(data){
    			            $("#TColonias_id").html(data);
    			        });         
    			    });
			   });
			});
/*-----------------Fin selector de dirección------------------*/
		</script>