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

		<link rel="stylesheet" href="./css/index.css">
		<script src="../../controller/estibas/index.js"></script>
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
						<h1 class="m-0 text-dark">Estibas y Pisos</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">Estibas y Pisos</li>
						<li class="breadcrumb-item">Listar</li>						
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
				<table id="tblEnvases" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" border="1px">
						<thead>
							<th>Referencia</th>
							<th>Descripción</th>
							<th class="td-oculta-sm">Usos</th>
							<th class="td-oculta-sm">Color</th>
							<th>Acción</th>		
						</thead>
						<tbody>
						
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
  <?php include "../include/modal.php"; ?>
</body>
</html>




