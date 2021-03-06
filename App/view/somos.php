<!DOCTYPE HTML>
<html>
<head>
	<title>Distritec</title>
    <?php include "./include/head.php"; ?>
    <!-- Estilos Propios -->
    <link rel="stylesheet" href="./src/css/somos.css">
</head>
<body>

    <?php include "./include/header.php"; ?>

<div id="contenedor">
    <div id="subContenedor">
        <div id="quienes">
            <p class="titulo">¿Quiénes somos?</p>
            <p class="texto">Desde 1991 nos hemos dedicado a la atención y servicio de clientes con necesidades en el sector de empaques. Producimos indirectamente en la modalidad de maquila y comercializamos productos manufacturados por industrias nacionales e internacionales.</p><br><br>

            <img src="../../../distritec_img/img_app/quienes_somos.jpg" alt="" class="img-fluid img-thumbnail n_border">
        </div>
        <hr />
        <div id="mision">
            <p class="titulo">Misión</p>
            <p class="texto">La mision de DISTRITEC SAS es producir y comercializar productos industriales de alta calidad, ofreciendo siempre un excelente servicio y precios competitivos en el territorio nacional, con el objeto de generar valor.</p>
        </div>
        <hr />
        <div id="vision">
            <p class="titulo">Visión</p>
            <p class="texto">DISTRITEC SAS será en el año 2020 una empresa rentable con un grupo de empleados comprometidos y orgullosos de su labor. Tendremos unas políticas claras que nos permitan implementar un gobierno corporativo eficiente que ayude a la sostenibilidad de la empresa en los años por venir.</p>
        </div>
        <hr />   
</div>

<div class="container">
    <p class="titulo">Valores</p> 
        <div class="row">
        <div class="col-md-1 col-sm-0"></div>
        <div class="col-md-10 col-sm-12">
            <img src="../../../distritec_img/img_app/somos/valores.jpg" alt="valores" class="img-fluid">
        </div>

        <div class="col-md-1 col-sm-12"></div>
        
    </div>
</div><br><br><br><br>

<?php include "./include/footer.php"; ?>
<?php include "./include/scriptComun.php"; ?>
<script>
    $("#li_qsomos").css("background", "#e60000");
</script>
</body>
</html>


