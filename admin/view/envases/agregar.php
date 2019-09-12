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


		<style>

			.content-wrapper {
				background: #f7f7f7;
			}

			.form-group label {
				margin-bottom:0px;
				font-weight: 500!important;
				font-size: 14px;
				padding-left: 4px;
			}

			.form-group input {
				font-size: 14px;
				height: 28px;
				line-height: 28px;
			}

			.row{
				margin: 0;
				margin-bottom: 15px;
			}

			#btnAddImage{
				position: absolute;
				right: 25px;
				bottom: 10px;
				background: #fd7e1491;
				color: white;
				padding: 6px;
				border-radius: 50%;
				cursor: pointer;
				height: 40px;
				width : 40px;
				line-height: 30px;
				text-align: center
			}


		</style>

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
						<h1 class="m-0 text-dark">Envases</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">Envases</li>
						<li class="breadcrumb-item">Editar Productos</li>						
						</ol>
					</div>
				<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
			<hr style="margin:0; margin-bottom: 15px; margin-top: -10px; margin-left: 20px; margin-right: 20px;">
	<!-- Contenido de la pagina -->
	<section class="content">
		<div class="container">

		<form id="formulario" action="../../controller/envases/controller.php" method="post" style="width:90%; margin: 0 auto; padding-bottom:30px;	">
					<div class="row">
						<div class="col-12 text-center" style="margin-bottom:20px;">
							<h4>Nuevo Producto</h4>
						</div>

						<!-- PRIMERA COLUMNA -->
						<div class="col-lg-3">
							<div class="col-12 form-group">
								<img src="../vendor/src/img/user2-160x160.jpg" alt="" style="border:1px solid #ccc; width:100%; height:auto;">							
								<input type="file" id="btnAddImage" class="fa fa-camera" title="agregar imagen"></span>
							</div>
							<div class="col-12 form-group">
								<label for="">Referencia:</label>
								<input type="text" class="form-control" name='referencia' />
							</div>
							<div class="col-12 form-group">
								<label for="">Descripcion:</label>
								<input type="text" class="form-control" name='descripcion' />
							</div>
							<div class="col-12 form-group">
								<label for="">Accesorios:</label>
								<input type="text" class="form-control" name='accesorios' />
							</div>
						</div>
						<!-- /. PRIMERA COLUMNA -->

						<!-- SEGUNDA COLUMNA -->
						<div class="col-lg-3">
							<div class="col-12 form-group">
								<label for="">Cod. Unidad:</label>
								<input type="text" class="form-control" name='cod_unidad' />
							</div>
							<div class="col-12 form-group">
								<label for="">Usos:</label>
								<input type="text" class="form-control" name='usos' />
							</div>

							<div class="col-12 form-group">
								<label for="">Capacidad (ml):</label>
								<input type="text" class="form-control" name='capacidad_ml' />
							</div>
							<div class="col-12 form-group">
								<label for="">Peso (gr):</label>
								<input type="text" class="form-control" name='peso_g'  />
							</div>
							<div class="col-12 form-group">
								<label for="">Diametro (mm):</label>
								<input type="text" class="form-control" name='diametro_mm' />
							</div>
							<div class="col-12 form-group">
								<label for="">Largo (mm):</label>
								<input type="text" class="form-control" name='largo_mm'  />
							</div>

						</div>
						<!-- /. SEGUNDA COLUMNA -->
						

						<!-- TERCERA COLUMNA -->
						<div class="col-lg-3">
							<div class="col-12 form-group">
								<label for="">Ancho (mm):</label>
								<input type="text" class="form-control" name='ancho_mm' />
							</div>
							<div class="col-12 form-group">
								<label for="">Diametro Rosca (mm):</label>
								<input type="text" class="form-control" name='diametro_r'  />
							</div>
							<div class="col-12 form-group">
								<label for="">Altura Rosca (mm):</label>
								<input type="text" class="form-control" name='altura_r'  />
							</div>
							<div class="col-12 form-group">
								<label for="">Color:</label>
								<input type="text" class="form-control" name='color'  />
							</div>
							<div class="col-12 form-group">
								<label for="">Material:</label>
								<input type="text" class="form-control" name='material'  />
							</div>
						</div>
						<!-- /. TERCERA COLUMNA -->

						<!-- CUARTA COLUMNA -->
						<div class="col-lg-3">
							<div class="col-12 form-group">
								<label for="">Precio Und:</label>
								<input type="text" class="form-control" name='precio_und'  />
							</div>
							<div class="col-12 form-group">
								<label for="">Contenido Pack:</label>
								<input type="text" class="form-control" name='contenido_pack'  />
							</div>
							<div class="col-12 form-group">
								<label for="">Precio Pack:</label>
								<input type="text" class="form-control" name='precio_pack'  />
							</div>
							<div class="col-12 form-group">
								<label for="">Cod. Forma</label>
								<input type="text" class="form-control" name='cod_forma'  />
							</div>
							<div class="col-12 form-group">
								<label for="">Cod. Linea</label>
								<input type="text" class="form-control" name='cod_linea'  />
							</div>
						</div>
						<!-- /. CUARTA COLUMNA -->
						
					</div>        
					<input type='hidden' name='insertar' value='insertar'>
					<input type="submit" id="btnEnviar" name="btnEnviar" value="Guardar">				
		</form>
		</div>
		


</section>
	<!-- /.Contenido de la pagina -->
	</div>
    <!-- /.Contenedor principal -->
	<?php include "../include/footer.php"; ?>

  </div>
  <!-- /.Lienzo de la pagina -->

<script src="../vendor/js/jquery331.js"></script>
<script>

$(document).ready(function () {
    $("#formulario").bind("submit",function(){
		var r = confirm("Presione aceptar para guardar la información, Cancelar si desea realizar algun cambio mas.");
  		if (r == true) {  
			var btnEnviar = $("#btnEnviar");
			$.ajax({
				type: $(this).attr("method"),
				url: $(this).attr("action"),
				data:$(this).serialize(),
				beforeSend: function(){
					btnEnviar.val("Enviando");
					btnEnviar.attr("disabled","disabled");
				},
				complete:function(data){
					btnEnviar.val("Enviar formulario");
					btnEnviar.removeAttr("disabled");
				},
				success: function(data){
					try {
					var json         = eval("(" + data + ")");
					if(json["proceso"]=="OK"){
						location.href = "./index.php";
					}
					}catch(error){
						alert("Error al cargar la informacion");
						console.log(data);
					}
				},
				error: function(data){
					alert("Problemas al tratar de enviar el formulario");
				}
			});
			return false;
		}else{
			return false;
		}
    });
});
</script>
</html>