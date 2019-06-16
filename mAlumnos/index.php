<?php 
	include('../sesiones/verificar_sesion.php');
	// Variables de configuración
	$titulo="Catálago de Alumnos";
	$opcionMenu="A";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('../header.php');?>
	</head>
	<body>
		<header>
			<?php 
				include('../layout/encabezado.php');
			?>
		</header><!-- /header -->	
		<div class="container-fluid" >
			<div class="row">
				<div class="col-xs-0 col-sm-3 col-md-2 col-lg-2 vertical">
					<?php  include('menuv.php');?>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 cont">
					<div class="titulo borde sombra">
						<h3><?php echo $titulo; ?></h3>
					</div>	
					<div class="contenido borde sombra">
						<div class="container-fluid">
							<section id="alta" style="display: none">
								<form id="frmAlta">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">
											<div class="form-group">
												<label for="persona">Persona:</label>
												<select name="idPersona" id="idPersona" class="form-control"></select>
											</div>
										</div>
										<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
											<div class="form-group">
												<label for="matricula">Matricula:</label>
												<input type="text" id="noControl" name="noControl" class="form-control " required="" placeholder="Escribe la Matricula">
											</div>
										</div>
										<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
											<div class="form-group">
												<label for="materno">Carrera:</label>
												<select name="idCarrera" id="idCarrera" class="form-control"></select>
											</div>
										</div>
										<hr class="linea">
									</div>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="btnLista" class="btn btn-login  btn-flat  pull-left">Lista de Alumnos</button>
											<input type="submit" class="btn btn-login  btn-flat  pull-right" value="Guardar Información">										
										</div>
									</div>
								</form>
							</section>
							<section id="lista"></section>
						</div>
					</div>	
				</div>			
			</div>
		</div>
		<footer class="fondo">
			<?php 
				include('../layout/pie.php');
			?>			
		</footer>
		<!-- Modal -->
		<div id="modalEditarAlumnos" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<form id="frmActulizaA">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Editar Datos Alumno</h4>
						</div>
						<div class="modal-body">
							<input type="hidden" id="idE">
							<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">
									<div class="form-group">
										<label for="nombreE">Nombre del Alumno:</label>
										<select name="nombreE" id="nombreE" class="select2" style="width:100%" disabled="disabled"></select>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="form-group">
										<label for="matricula">Matricula:</label>
										<input type="text" name="noControlE" id="noControlE" class="form-control">
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="form-group">
										<label for="carera">Carrera:</label>
										<select name="carreraE" id="carreraE" class="select2" style="width:100%"></select>
									</div>
								</div>
								<hr class="linea">
							</div>
						</div>
						<div class="modal-footer">
							<div class="row">
								<div class="col-lg-12">
									<button type="button" id="btnCerrar" class="btn btn-login  btn-flat  pull-left" data-dismiss="modal">Cerrar</button>
									<input type="submit" class="btn btn-login  btn-flat  pull-right" value="Actualizar Información">	
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Modal -->
		<?php include('../footer.php');?>
	</body>
</html>