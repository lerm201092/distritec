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
                                <input type="checkbox" name="chk_capacidad" max="99999999" min="301"><i></i>301 - Superior
                            </label>
                        </div>
                        <div class="col col-4">
                            <label class="checkbox">
                                <input type="checkbox" name="chk_capacidad" max="300" min="101"><i></i>101 - 300
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_capacidad" max="100" min="61"><i></i>61 - 100
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_capacidad" max="60" min="31"><i></i>31 - 60
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="chk_capacidad" max="30" min="0"><i></i>0 - 30
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
                        </div>
                        <div class="col col-4">
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
            <div id="cajaPrincipal" class="cont span_2_of_3">

            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php include "./include/footer.php"; ?>
    <script>
        var tipo_producto_inicial = "<?php $x=$_GET["tipo"]; echo $x; ?>"; 
        tipo_producto_inicial = tipo_producto_inicial.toUpperCase();
    </script>
    <script src="../controller/producto/obtenerProducto.js"></script>
    <script src="../controller/producto/filtro.js"></script>


</body>
</html>