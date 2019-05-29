<?php 
	include'../conexion/conexion.php';
	// Variables de configuración
	$titulo="Catálago de Carreras";
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
					<?php include('menuv.php');?>
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
												<label for="nombre">Nombre de la Carrera:</label>
												<input type="text" id="nombre" class="form-control " autofocus="" required="" placeholder="Escribe el nombre">
											</div>
										</div>
										<div class="col-xs-6 col-sm-4 col-md-4 col-lg-6">
											<div class="form-group">
												<label for="abreviatura">Abreviatura:</label>
												<input type="text" id="abreviatura" class="form-control " required="" placeholder="Escribe el abreviatura">
											</div>
										</div>
										<hr class="linea">
									</div>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="btnLista" class="btn btn-login  btn-flat  pull-left">Lista de Carreras</button>
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
		<div id="modalEditar" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<form id="frmActuliza">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Editar datos Carreras</h4>
						</div>
						<div class="modal-body">
							<input type="hidden" id="idE">
							<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">
									<div class="form-group">
										<label for="nombreE">Nombre de la Carrera:</label>
										<input type="text" id="nombreE" class="form-control " autofocus="" required="" placeholder="Escribe el nombre">
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-6">
									<div class="form-group">
										<label for="abreviaturaE">Abreviaruta:</label>
										<input type="text" id="abreviaturaE" class="form-control " required="" placeholder="Escribe la abreviatura">
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