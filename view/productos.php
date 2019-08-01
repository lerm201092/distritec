<!DOCTYPE HTML>
<html>
<head>
    <title>Distritec</title>
    <?php include "./include/headShop.php"; ?> 
</head>
<body>
    <?php include "./include/header.php"; ?>
    <div class="login">
        <div class="wrap">
            <div class="rsidebar span_1_of_left">
                <section class="sky-form">
                    <!-- Filtro Capacidad -->
                    <h4>Capacidad</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox">
                                <input type="checkbox" name="chk_capacidad" max="99999999" min="7001"><i></i>7001 - Superior
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_capacidad" max="7000" min="5001"><i></i>5001 - 7000
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_capacidad" max="5000" min="2001"><i></i>2001 - 5000
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_capacidad" max="2000" min="1001"><i></i>1001 - 2000
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_capacidad" max="1000" min="0"><i></i>0 - 1000
                            </label>
                        </div>
                    </div>
                    <!-- Fin filtro capacidad -->
                    <h4>Precios</h4>
                    <div class="row row1 scroll-pane">
                        <div class="col col-4">
                            <label class="checkbox">
                                <input type="checkbox" name="chk_precio" max="99999999" min="1001"><i></i>1001 - Superior
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_precio" max="1000" min="901"><i></i>901 - 1000
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_precio" max="900" min="701"><i></i>701 - 900
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_precio" max="700" min="401"><i></i>401 - 700
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_precio" max="400" min="0"><i></i>0 - 400
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" onclick="filtro();">Buscar</button>
			</div>
            <div id="cajaPrincipal" class="cont span_2_of_3 hide">

            </div>
            <div id="cajaEspera" class="cont span_2_of_3">
                <div style="width: 100%; text-align: center; padding-top: 20px;">
                    <img id="imagenPrincipal" src="./src/images/cargando.gif">
                </div>                
            </div>
            <div id="cajaNohay" class="cont span_2_of_3 hide">
                <div style="width: 100%; text-align: center; padding-top: 20px;">
                    <img src="./src/images/opps.png" alt="" style="width:200px;height:auto">                    
                    <h1 style="font-size:24px; color: #002183; font-weight:bold; margin-top: 20px;">PRODUCTOS NO DISPONIBLES</h1>
                    <p style="font-weight:bold;margin-top:15px" id="pronohay">Te invitamos a seguir navegando en el sitio, hay una gran variedad de productos para vos!</p>
                </div>                
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php include "./include/footer.php"; ?>
    <script>
        var tipo_producto_inicial = "<?php $x=$_GET["tipo"]; echo $x; ?>"; 
        $("#li_"+tipo_producto_inicial).css("background", "#e60000");
        tipo_producto_inicial = tipo_producto_inicial.toUpperCase();
    </script>
    <script src="../controller/producto/obtenerProducto.js"></script>
    <script src="../controller/producto/filtro.js"></script>


</body>
</html>