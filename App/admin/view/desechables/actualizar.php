<?php include "../../../modelo/sesion/seguridad.php"; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin. Distritec</title>
		<!-- Styles -->
		<meta name="viewport" content="width=device-width, initial-scale=1"         />
		<link rel="stylesheet" href="../../../../distritec_vendor/crud/fontawesome/font-awesome.min.css"          />
		<link rel="stylesheet" href="../../../../distritec_vendor/crud/src/css/adminlte.min.css"             />
		<link rel="stylesheet" href="../../../../distritec_vendor/crud/src/css/fonts.css"                    />
		<link rel="stylesheet" href="../../../../distritec_vendor/crud/bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../../../distritec_vendor/crud/datatable/datatables.css" />
		<!-- Scripts -->
		<script src="../../../../distritec_vendor/crud/jquery/dist/jquery.min.js"></script>
		<script src="../../../../distritec_vendor/crud/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../../../../distritec_vendor/crud/popper.js/dist/umd/popper.min.js"></script>
		<script src="../../../../distritec_vendor/crud/src/js/adminlte.min.js"></script>
		<script src="../../../../distritec_vendor/crud/datatable/datatables.js"></script>

<!-- Propios  -->
<link rel="stylesheet" href="./css/style.css" />
<link rel="stylesheet" href="./css/agregar.css" />
<script> var REFERENCIA = "<?php echo $_GET["id"]; ?>";</script>
<script src="../../controller/desechables/actualizar.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">

	<!-- Lienzo de la pagina -->
	<div class="wrapper">
		<?php include "../include/top.php"; ?>
		<!-- Contenedor principal -->
		<div class="content-wrapper">
		<!-- Header del contenido -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">Desechables</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item">Desechables</li>
								<li class="breadcrumb-item">Actualizar</li>						
							</ol>
						</div>						
					</div>
				</div>
			</div>
			<hr class="myHr" />

			<section class="content">
				<div class="container">


					<!-- INICIO DEL FORMULARIO -->
					<form id="formulario" action="" method="POST" enctype="multipart/form-data">
						<div class="row">
							<p></p>
  							<!-- PRIMERA CARD -->
							<div class="card col-12 nopadding">
								<div class="card-body col-12 nopadding">
									<div class="row">

										<div class="col-12 text-center" >
										<p style="border-bottom: 2px solid #ececec; padding: 20px 10px 8px 10px; margin: 15px 18px 25px;"><b>Datos Basicos</b></p>
										</div>

										<div class="col-md-4">
											<div class="col-12 form-group form-group-sm">
												<div style="width: 100%; border:1px solid #ccc;text-align: center; min-height: 150px;">
													<img title="Imagen del producto" id="imgProducto" src="../../../../distritec_img/img_productos/<?php echo $_GET["id"]; ?>.png" alt="" style="width: auto; max-width:100%; max-height: 180px;">	
												</div>																	
												<div class="custom-file">
													<input  name="file" type="file" class="custom-file-input form-control form-control-sm"  id="file" />
													<label class="custom-file-label form-control form-control-sm" for="file">Cambiar imagen</label>
													<input name="rutaImagen" type="hidden" value="" />
												</div>
												<p id="spImagen"></p>
											</div>
										</div>

										<div class="col-md-4">	
											<div class="col-12 form-group">
												<label for="">Referencia:</label>
												<input type="number" class="form-control form-control-sm" name='referencia' readonly/>
											</div>
											<div class="col-12 form-group">
												<label for="">Descripcion:</label>
												<input type="text" class="form-control form-control-sm" name='descripcion' requerido="SI"/>
											</div>
											<div class="col-12 form-group">
												<label for="">Cod. Unidad:</label>
												<input type="text" class="form-control form-control-sm" name='cod_unidad' requerido="SI"/>
											</div>
										</div>

										<div class="col-md-4">
											<div class="col-12 form-group">
												<label for="">Accesorios:</label>
												<input type="text" class="form-control form-control-sm" name='accesorios' />
											</div>
											<div class="col-12 form-group">
												<label for="">Usos:</label>
												<input type="text" class="form-control form-control-sm" name='usos' />
											</div>	
											<div class="col-12 form-group">
												<label for="">Color:</label>
												<input type="text" class="form-control form-control-sm" name='color'  />
											</div>
										</div>
									</div>
								</div>
							</div>	
							<!-- /. PRIMERA CARD -->
  							
							<!-- SEGUNDA CARD -->
							<div class="card col-12 nopadding" style="margin-top: 20px!important;">
								<div class="card-body col-12 nopadding">
									<div class="row">										
										<div class="col-12 text-center">
											<p style="border-bottom: 2px solid #ececec; padding: 20px 10px 8px 10px; margin: 15px 18px 25px;"><b>Caracteristicas y/o Dimensiones</b></p>
										</div>
										<div class="col-md-4 form-group">
												<label for="">Material:</label>
												<input type="text" class="form-control form-control-sm" name='material'  />
											</div>
											<div class="col-md-4 form-group">
												<label for="">Capacidad (Fl.Oz):</label>
												<input type="text" class="form-control form-control-sm" name='capacidad_ml' />
											</div>
											<div class="col-md-4 form-group">
												<label for="">Peso (gr):</label>
												<input type="text" class="form-control form-control-sm" name='peso_g'  />
											</div>
											<div class="col-md-4 form-group">
												<label for="">Diametro (cm):</label>
												<input type="text" class="form-control form-control-sm" name='diametro_mm' />
											</div>
											<div class="col-md-4 form-group">
												<label for="">Largo (cm):</label>
												<input type="text" class="form-control form-control-sm" name='largo_mm'  />
											</div>
											<div class="col-md-4 form-group">
												<label for="">Altura (cm):</label>
												<input type="text" class="form-control form-control-sm" name='altura_mm'  />
											</div>
											<div class="col-md-4 form-group">
												<label for="">Ancho (cm):</label>
												<input type="text" class="form-control form-control-sm" name='ancho_mm' />
											</div>
											<div class="col-md-4 form-group">
												<label for="">Forma:</label>
												<select class="form-control form-control-sm" name='cod_forma' >
													<option value="">Esconja una opcion</option>
													<option value="R">Rectangular</option>
													<option value="C">Cilindrica</option>
												</select>
											</div>
											<div class="col-md-4 form-group">
												<label for="">Linea de producto</label>
												<select class="form-control form-control-sm" name='cod_linea'>
													<option value="">Esconja una opcion</option>
													<option value="F">Farmaceuticos</option>
													<option value="A">Alimentos</option>
													<option value="C">Cosmeticos</option>
													<option value="Q">Quimicos</option>
													<option value="V">Variedades</option>
													<option value="T">Tapas y Tapones</option>
												</select>
											</div>
											<div class="col-md-4 form-group">
												<label for="">Precio Und:</label>
												<input type="text" class="form-control form-control-sm" name='precio_und'  />
											</div>
											<div class="col-md-4 form-group">
												<label for="">Contenido Pack:</label>
												<input type="text" class="form-control form-control-sm" name='contenido_pack'  />
											</div>
											<div class="col-md-4 form-group">
												<label for="">Precio Pack:</label>
												<input type="text" class="form-control form-control-sm" name='precio_pack'  />
											</div>

											<div class="col-12 text-right" style="padding-top: 20px;">
												<input type='hidden' name='tabla' value='DESECHABLES'>
												<a class="btn btn-primary" id="btnEnviar" style="color:white;  font-weight:500; padding: 5px 20px;">Guardar</a>
											</div>
									</div>
								</div>
							</div>
							<!-- /. SEGUNDA CARD -->		
						</div>	
			
					</form>
					<!-- /. FIN DEL FORMULARIO  -->



				</div>
			</section>
			<!-- /.Contenido de la pagina -->
		</div>
		<!-- /.Contenedor principal -->
		<?php include "../include/footer.php"; ?>
	</div>
	<p id="mensajeAlerta">COMPLETE LOS CAMPOS</p>
	<!-- /.Lienzo de la pagina -->
	<?php include "../include/modal.php"; ?>

</html>