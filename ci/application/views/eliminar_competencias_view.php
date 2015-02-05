<!DOCTYPE html>
<html>

<head>
	<title>Competencias</title>
	<meta charset="UTF-8">
	<LINK href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css" type=text/css rel=stylesheet>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-2.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</head>

<body>
	<form name="formulario" class="form-group" method="POST">
	<div class="container">
		<h2>Competencias</h2><hr>
		<table class="table table-striped"> <!-- Tabla de competencias -->
			<thead>
				<tr>
					<td>Nombre de competencia</td>
					<td>Cuatrimestre</td>
					<td>Especialidad</td>
					<td>Opciones</td>
				</tr>	
			</thead>
			<tbody>
				<tr> <!-- Ejemplo de competencia 1 -->
					<?php
					foreach($competencias as $a){
					?>
                    <td><input name="id" value="<?php echo $a['competencia']?>"/></td>
                    <?php
                    echo "<td>" . $a["cuatrimestre"] . "</td>";
                    echo "<td>" . $a["especialidad"] . "</td>";
                    ?>
					<td>
					<input value="Editar" onclick='this.form.action = "<?php echo site_url()?>/editar_competencias_controller/cargar"' type ='submit' class='btn btn-default' aria-label ='Left Align'/>
					<input value='Eliminar' onclick='this.form.action = "<?php echo site_url()?>/eliminar_competencias_controller/eliminar"' type ='submit' class ='btn btn-default' aria-label ='Left Align'/>
					<?php
					echo "<br>";
				echo "</tr>";
				}
				    ?>
			</tbody>
		</table>
	<!--
		<form class="form-group">
			<label for="fecha_inicio" class=" control-label">Competencias</label>
			<textarea class="form-control" rows="5"></textarea>
		</form>
		-->

		<hr> <!-- Botones -->
			<div align="right">
				<input type="submit" onclick = "this.form.action = '<?php echo site_url()?>/eliminar_competencias_controller/cargar'" value ="Cancelar" class="btn btn-danger"/>
				<input type="submit" onclick = "this.form.action = '<?php echo site_url()?>/agregar_competencias_controller/cargar'"  value="Agregar competencia" class="btn btn-primary"/>
			</div>
	</div>
</form>
</body>

</html>



						