<?php
    //incluye la clase Libro y CrudLibro
    require_once('../../model/sesion/conexion.php');
    require_once('../../model/envases/crud_envases.php');
    require_once('../../model/envases/envases.php');
	$crud   = new CrudEnvases();
    $envase = new Envases();
    
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$ref = $_GET["id"];
	$ref = str_ireplace("'", "", $ref);
    $envase = $crud->obtenerEnvase($ref);
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
					<h4>Actualizar Datos</h4>
				</div>
				<div class="col-md-4 form-group">
					<label for="">Referencia:</label>
					<input type="text" class="form-control" name='referencia' value="<?php echo $envase->getReferencia(); ?>" readonly/>
				</div>
				<div class="col-md-4 form-group">
					<label for="">Descripcion:</label>
					<input type="text" class="form-control" name='descripcion' value="<?php echo $envase->getDescripcion(); ?> " />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Accesorios:</label>
					<input type="text" class="form-control" name='accesorios' value="<?php echo $envase->getAccesorios(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Cod. Unidad:</label>
					<input type="text" class="form-control" name='cod_unidad' value="<?php echo $envase->getCodUnidad(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Usos:</label>
					<input type="text" class="form-control" name='usos' value="<?php echo $envase->getUsos(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Capacidad (ml):</label>
					<input type="text" class="form-control" name='capacidad_ml' value="<?php echo $envase->getCapacidadMm(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Peso (gr):</label>
					<input type="text" class="form-control" name='peso_g' value="<?php echo $envase->getPesoG(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Diametro (mm):</label>
					<input type="text" class="form-control" name='diametro_mm' value="<?php echo $envase->getDiametroMm(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Largo (mm):</label>
					<input type="text" class="form-control" name='largo_mm' value="<?php echo $envase->getLargoMm(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Ancho (mm):</label>
					<input type="text" class="form-control" name='ancho_mm' value="<?php echo $envase->getAnchoMm(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Diametro Rosca (mm):</label>
					<input type="text" class="form-control" name='diametro_r' value="<?php echo $envase->getDiametroR(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Altura Rosca (mm):</label>
					<input type="text" class="form-control" name='altura_r' value="<?php echo $envase->getAlturaR(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Color:</label>
					<input type="text" class="form-control" name='color' value="<?php echo $envase->getColor(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Material:</label>
					<input type="text" class="form-control" name='material' value="<?php echo $envase->getMaterial(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Precio Und:</label>
					<input type="text" class="form-control" name='precio_und' value="<?php echo $envase->getPrecioUnd(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Contenido Pack:</label>
					<input type="text" class="form-control" name='contenido_pack' value="<?php echo $envase->getContenidoPack(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Precio Pack:</label>
					<input type="text" class="form-control" name='precio_pack' value="<?php echo $envase->getPrecioPack(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Cod. Forma</label>
					<input type="text" class="form-control" name='cod_forma' value="<?php echo $envase->getCodForma(); ?>" />
				</div>
				<div class="col-md-4 form-group">
					<label for="">Cod. Linea</label>
					<input type="text" class="form-control" name='cod_linea' value="<?php echo $envase->getCodLinea(); ?>" />
				</div>
			</div>        
			<input type='hidden' name='actualizar' value='actualizar'>
    		<input type="submit" id="btnEnviar" name="btnEnviar" value="Actualizar Datos">
		</form>
		</div>
		


</section>
	<!-- /.Contenido de la pagina -->
	</div>
    <!-- /.Contenedor principal -->
	<?php include "../include/footer.php"; ?>

  </div>
  <!-- /.Lienzo de la pagina -->
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
</body>
</html>