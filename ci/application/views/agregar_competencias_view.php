<!DOCTYPE html>
<html>
	<head>
		<title>Agregar competencia</title>
		<script type="text/javascript">$("#fecha_inicio").datepicker();</script>
		<LINK href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css" type=text/css rel=stylesheet>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-2.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
	</head>

	<body>
		<form name="formulario" class="form-group" method="POST">
		<div class="container">		
			<h2>Agregar competencia</h2><hr>
			
				<label for="fecha_inicio" class=" control-label">Competencias</label>
				<textarea class="form-control" rows="5" name="competencia"></textarea><br>
				<div class="row">
					<div class="col-md-3">
						<label>Cuatrimestre</label>
						<select class="form-control" name="cuatrimestre">
							<option>Primer cuatrimestre</option>
							<option>Segundo cuatrimestre</option>
							<option>Tercer cuatrimestre</option>
							<option>Quinto cuatrimestre</option>
							<option>Sexto cuatrimestre</option>
							<option>Septimo cuatrimestre</option>
							<option>Octavo cuatrimestre</option>
							<option>Noveno cuatrimestre</option>
						</select>
					</div>
					<div class="col-md-3">
						<label>Especialidad</label>
						<select class="form-control" name="especialidad">
							<option>Redes</option>
							<option>Software</option>
							<option></option>
						</select>
					</div>
				</div>
			
		</div>

		<div align="right">
				<input value ="Cancelar"onclick = "this.form.action = '<?php echo site_url()?>/eliminar_competencias_controller/cargar'" type="submit" class="btn btn-danger"/>
				<input value="Agregar Competencia" onclick = "this.form.action = '<?php echo site_url()?>/agregar_competencias_controller/insertar'" type="submit" class="btn btn-primary"/>
			</div>
		</form>
	</body>
</html>