<!DOCTYPE HTML>

<html>

<head>
    <title>Distritec</title>
    <?php include "./include/headShop.php"; ?>
    <link rel="stylesheet" href="./src/css/single.css">
</head>

<body>

    <?php include "./include/header.php"; ?>



    <div class="row" style="padding-bottom: 80px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-5" style="line-height: 400px; text-align:center">
                    <div id="div_img">
                        <img src="./src/images/productos/1111.png" id="img_producto" sytle="max-height: 380px; width : auto;">
                    </div>
                </div>
                <div class="col-md-5">
                    <p id="descripcion_producto"></p>
                    <div>
                        <p id="p_carac">Caracteristicas</p>
                    </div>
                    <div id="tabla_producto" >
                        <div>
                        <table border="1px">
                        <tr>
                            <td>Referencia</td>
                            <td id="td_referencia" style="font-weight:600"></td>
                        </tr>
                        <tr>
                            <td>Usos</td>
                            <td id="td_usos" style="font-weight:600"></td>
                        </tr>
                        <tr>
                            <td>Accesorios</td>
                            <td id="td_accesorios" style="font-weight:600"></td>
                        </tr>
                        <tr>
                            <td>Peso</td>
                            <td id="td_peso" style="font-weight:600"></td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td id="td_color" style="font-weight:600"></td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td id="td_material" style="font-weight:600"></td>
                        </tr>
                        <tr>
                            <td>Diametro</td>
                            <td id="td_diametro" style="font-weight:600"></td>
                        </tr>
                        <tr>
                            <td>Altura</td>
                            <td id="td_altura" style="font-weight:600"></td>
                        </tr>
                        <tr>
                            <td>Diametro de rosca</td>
                            <td id="td_diametro_r" style="font-weight:600"></td>
                        </tr>
                        <tr>
                            <td>Altura de rosca</td>
                            <td id="td_altura_r" style="font-weight:600"></td>
                        </tr>
                    </table>

                        <p style="width:100%; text-align: right"><a href="./contatenos.php" class="btn btn-primary">Cotizar</a></p>
                    </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
      

    <?php include "./include/footer.php"; ?>

    <script>
        var referencia = <?php $x = $_GET["ref"]; echo $x; ?>;
        var tipo_producto = "<?php $x = $_GET["tipo"]; echo $x; ?>";
        if(tipo_producto == "ENVASE"){
                $("#tr_dr").removeClass("hide"); 
        }
        tipo_producto = tipo_producto.toLowerCase();
        $("#li_"+tipo_producto).css("background", "#e60000");
    </script>

    <script src="../controller/producto/detalleProducto.js"></script>

</body>
</html>