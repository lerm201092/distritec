<?php
	//incluye la clase Libro y CrudLibro
	require_once('../../model/sesion/conexion.php');
	require_once('../../model/envases/crud_envases.php');
	require_once('../../model/envases/envases.php');
	$crud   = new CrudEnvases();
	$envase = new Envases();
	//obtiene todos los libros con el método mostrar de la clase crud
	$listaEnvases=$crud->mostrar();
?>

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
			.table-striped tbody tr:nth-of-type(odd) {
				background-color: rgba(0, 0, 0, 0.02);
			}
			table.dataTable.no-footer {
    			border-bottom: 1px solid #ccc;
			}

			table.dataTable thead th:first-child{
				border-left: 1px solid #ccc;
			}
			table.dataTable thead th, table.dataTable thead td {
				/* padding: 5px 18px; */
				border-top: 1px solid #ccc;
				border-bottom: 1px solid #ccc;
				border-right: 1px solid #ccc;
				font-weight: 500;
				font-size: 14px;
				background: #c3c3c38a;
			}
			.dataTables_wrapper .dataTables_filter input {
				margin-left: 0.5em;
				border-radius: 5px;
				height: 30px;
				line-height: 30px;
				padding-left: 5px;
			}

			.dataTables_wrapper .dataTables_length select {
				border-radius: 5px;
				min-width: 80px;
				padding-left: 5px;
				height: 30px;
				line-height: 30px;
				margin: 0 6px;
			}
			.dataTables_wrapper .dataTables_length label, .dataTables_wrapper .dataTables_filter label{
				font-weight: 400;
				font-weight: 14px;
			}
			.dataTables_wrapper .dataTables_paginate .paginate_button {
				padding: 0px 3px;
			}

			.btn-sm {
				height: 27px;
				width: 27px;
				padding: 0px 1px;
				line-height: 24px;
				font-size: 13px;
			}

			.btn-edit{
				background : #fd7e14 ;
				border-color: #fd7e14 ;
				color: white;
			}

			.btn-danger{
				background : #da3c30  ;
				border-color: #da3c30  ;
			}

			.btn-primary{
				background : #03a9f4 ;
				border-color: #03a9f4 ;
			}

			#btnNew{
				position: relative;
				margin-top:-130px;
				margin-right: 40px;
				border-radius: 50%;				
			}

			table{
				width: 100%;
			}

			@media only screen and (max-width: 768px) {
				.td-oculta-sm{
					display:none;
				}
			} 

			.row{
				margin: 0;
				margin-bottom: 15px;
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
						<li class="breadcrumb-item">Listar Envases</li>						
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
		<div class="row">
			<div class="col-12 text-center">
				<h4>Registro de productos</h4>
			</div>
			<div class="col-12">
				<div style="width:90%; margin:0 auto">
				<table class="col-12 display compact cell-border" id="tblEnvases" style="padding:0">
						<thead>
							<th>Referencia</th>
							<th>Descripción</th>
							<th class="td-oculta-sm">Usos</th>
							<th class="td-oculta-sm">Color</th>
							<th>Acción</th>		
						</thead>
						<tbody>
							<?php foreach ($listaEnvases as $envase) { $ref =  $envase->getReferencia();?>
								<tr>
									<td><?php echo $ref ?></td>
									<td><?php echo $envase->getDescripcion() ?></td>
									<td class="td-oculta-sm"><?php echo $envase->getUsos() ?></td>
									<td class="td-oculta-sm"><?php echo $envase->getColor() ?></td>
									<td class="text-center" style="min-width: 120px;">
										<a href="#" onclick="actualizar('<?php echo $ref?>');" class="btn btn-primary btn-sm">
											<i class="fa fa-eye"></i>
										</a>
										<a href="#" onclick="actualizar('<?php echo $ref?>');" class="btn btn-edit btn-sm">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="#" onclick="eliminar('<?php echo $ref?>');" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</a>
									</td>									  
								</tr>
							<?php }	?>
						</tbody>
					</table>
				</div>			
			</div>
		</div>
	

	
	</section>
	<!-- /.Contenido de la pagina -->
	</div>
    <!-- /.Contenedor principal -->
	<?php include "../include/footer.php"; ?>

  </div>
  <!-- /.Lienzo de la pagina -->

  <script>
	$(document).ready(function(){
		$('#tblEnvases').DataTable({
			"language": {
			"url": "../vendor/datatable/spanish.json"
			}
		});
		$("#menu-derecha").html(`<li class="nav-item"><a href="agregar.php" class="nav-link" title="Crear nuevo producto"><span class="fa fa-plus"></span> Nuevo</a></li>`);
	})

	function actualizar(ref){
		var r = confirm("¿Desea actualizar los datos del producto "+ref+"?");
  		if (r == true) {  
			location.href = "actualizar.php?id='"+ref+"'";
		}
	}

	function eliminar(ref){
		var r = confirm("¿Desea retirar el producto "+ref+"?");
  		if (r == true) {  
			$.ajax({
				type: "POST",
				url: "../../controller/envases/controller.php",
				data: { "accion" : "eliminar", "referencia" : ref },
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
		}
	}
</script>
</body>
</html>




