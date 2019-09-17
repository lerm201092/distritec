<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Plantilla HTML LR</title>
<!-- Styles -->
<meta name="viewport" content="width=device-width, initial-scale=1"         />
<link rel="stylesheet" href="../vendor/fontawesome/font-awesome.min.css"          />
<link rel="stylesheet" href="../vendor/src/css/adminlte.min.css"             />
<link rel="stylesheet" href="../vendor/src/css/fonts.css"                    />
<link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
<!-- Scripts -->
<script src="../vendor/jquery/dist/jquery.min.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../vendor/src/js/adminlte.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<!-- Propios  -->
<link rel="stylesheet" href="./css/style.css" />
<link rel="stylesheet" href="./css/agregar.css" />
<script> var REFERENCIA = "<?php echo $_GET["id"]; ?>";</script>
<script src="../../controller/atomizadores/actualizar.js"></script>

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
							<h1 class="m-0 text-dark">Atomizadores</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item">Atomizadores</li>
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
													<img id="imgProducto" src="../productos/<?php echo $_GET["id"]; ?>.png" alt="" style="width: auto; max-width:100%; max-height: 180px;">	
												</div>																	
												<div class="custom-file">
													<input  name="file" type="file" class="custom-file-input form-control form-control-sm"  id="file"/>
													<label class="custom-file-label form-control form-control-sm" for="file">Seleccione imagen</label>
													<input name="rutaImagen" type="hidden" value="" />
												</div>
												<p id="spImagen"></p>
											</div>
										</div>

										<div class="col-md-8">
											<div class="row">
											<div class=" form-group col-md-6">
												<label for="">Referencia:</label>
												<input type="number" class="form-control form-control-sm" name='referencia' requerido="SI"/>
											</div>
											<div class=" form-group col-md-6">
												<label for="">Descripcion:</label>
												<input type="text" class="form-control form-control-sm" name='descripcion' requerido="SI"/>
											</div>
											<div class=" form-group col-md-6">
												<label for="">Cod. Unidad:</label>
												<input type="text" class="form-control form-control-sm" name='cod_unidad' requerido="SI"/>
											</div>
											<div class=" form-group col-md-6">
												<label for="">Accesorios:</label>
												<input type="text" class="form-control form-control-sm" name='accesorios' />
											</div>	
											<div class=" form-group col-md-6">
												<label for="">Material:</label>
												<input type="text" class="form-control form-control-sm" name='material'  />
											</div>
											<div class=" form-group col-md-6">
												<label for="">Color:</label>
												<input type="text" class="form-control form-control-sm" name='color'  />
											</div>
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
											<label for="">Peso (gr):</label>
											<input type="text" class="form-control form-control-sm" name='peso_g'  />
										</div>
										<div class="col-md-4 form-group">
											<label for="">Precio Und:</label>
											<input type="text" class="form-control form-control-sm" name='precio_und'  />
										</div>

										<div class="col-md-4 form-group">
											<label for="">Diametro Rosca (mm):</label>
											<input type="text" class="form-control form-control-sm" name='diametro_r'  />
										</div>
										<div class="col-md-4 form-group">
											<label for="">Altura Rosca (mm):</label>
											<input type="text" class="form-control form-control-sm" name='altura_r'  />
										</div>

										<div class="col-md-4 form-group">
											<label for="">Contenido Pack:</label>
											<input type="text" class="form-control form-control-sm" name='contenido_pack'  />
										</div>
										<div class="col-md-4 form-group">
											<label for="">Precio Pack:</label>
											<input type="text" class="form-control form-control-sm" name='precio_pack'  />
										</div>

										<div class="col-md-4 form-group">
											<label for="">Linea de producto</label>
											<select class="form-control form-control-sm" name='cod_linea' requerido="SI">
												<option value="">Esconja una opcion</option>
												<option value="F">Farmaceuticos</option>
												<option value="A">Alimentos</option>
												<option value="C">Cosmeticos</option>
												<option value="Q">Quimicos</option>
												<option value="V">Variedades</option>
												<option value="T">Tapas y Tapones</option>
											</select>
										</div>

										<div class="col-12 text-right" style="padding-top: 20px;">
											<input type='hidden' name='tabla' value='ATOMIZADORES'>
											<a class="btn btn-primary" id="btnEnviar" name="btnEnviar" value="Registrar Producto">Guardar</a>
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