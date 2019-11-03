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

		<link rel="stylesheet" href="./css/index.css">
		<script src="../../controller/opciones/contrasena.js"></script>
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
						<h1 class="m-0 text-dark">Opciones</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">Opciones</li>
						<li class="breadcrumb-item">Cambiar Contraseña</li>						
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
        <center>
		<div class="row m-0 p-2">
			<div class="card <?php if($_SESSION['id_distritec'] === 'Lucia'){ echo 'col-md-12'; }else{ echo 'col-md-8 offset-md-2'; } ?>">
				<div class="card-body">
					<div class="row">
						<div class="<?php if($_SESSION['id_distritec'] === 'Lucia'){ echo 'col-md-6'; }else{ echo 'col-12'; } ?> mt-4 mb-4">	
							<div class="form-group">
								<label for="txt_pass" style="float:left">Nueva Contraseña:</label>
								<input type="password" id="txt_pass" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="txt_confirm" style="float:left">Confirmar Contraseña:</label>
								<input type="password" id="txt_confirm" class="form-control"/>
							</div>
							<a href="#" class="btn btn-primary col-12" onclick="Cambiar();">Cambiar Contraseña</a>							
						</div>
						<div class="<?php if($_SESSION['id_distritec'] == 'Lucia'){ echo 'col-md-6'; }else{ echo 'col-12 d-none'; } ?> mt-4 mb-4">
							<div class="form-group">
								<label for="txt_pass_mail" style="float:left">Contraseña email Contactenos:</label>
								<input type="password" id="txt_pass_email" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="txt_confirm_mail" style="float:left">Confirmar Contraseña email Contactenos:</label>
								<input type="password" id="txt_confirm_email" class="form-control"/>
							</div>
							<a href="#" class="btn btn-primary col-12" onclick="Cambiar_email();">Cambiar Contraseña</a>
								
						</div>
					</div>
				</div>
			</div>
		</div>

        </center>

	
	</section>
	<!-- /.Contenido de la pagina -->
	</div>
    <!-- /.Contenedor principal -->
	<?php include "../include/footer.php"; ?>

  </div>
  <?php include "../include/modal.php"; ?>
</body>
</html>




