<?php
	include_once("../modelo/empresa.php");
	include_once("../modelo/usuario.php");
	$objEmpresa=new Empresa();
	$objUsuario=new Usuario();
?>
<div class="container">
	<div id="mensajesInforme"></div>
	<form id="formularioInforme" method="post" action="../controlador/informeControlador.php" onsubmit="return descargarInforme();">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Tipo de informe</label>
					<select class="form-control" id="comboTipoInforme" name="comboTipoInforme" onchange="validarTipoInforme(this.value)">
						<option value="">Seleccione</option>
						<option value="0">Informe individual</option>
						<option value="1">Informe cuestionario intralaboral</option>
						<option value="2">Informe cuestionario extralaboral</option>
						<option value="3">Informe cuestionario éstres</option>
						<option value="4">Informe de encuestados</option>
						<option value="5">Informe de empleados en riesgo</option>
						<option value="6">Informe riesgo de la empresa</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Empresa</label>
					<select class="form-control" name="comboEmpresa" id="comboEmpresa" onchange="mostrarDatos(this.value)" >
						<option value="">Seleccione</option>
						<?php
							$objEmpresa->mostrarOption();
						?>
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Año</label>
					<select class="form-control" name="comboYear" id="comboYear" >
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group" id="divCedula" style="display: none">
					<label>Cédula empleado</label>
					<input type="text" class="form-control" name="txtCedula" id="txtCedula" list="listEmpleados" autocomplete="off">
					<datalist id="listEmpleados">
					</datalist>
				</div>
			</div>
		</div>
		<div class="row" style="text-align: center;">
			<div class="col-md-12">
				<input type="submit" class="btn btn-primary" value="Aceptar" >
			</div>
		</div>
	</form>
</div>


